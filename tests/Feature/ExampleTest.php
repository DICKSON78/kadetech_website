<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_displays_kadetech_services_and_contact_details(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('KADETECH')
            ->assertSee('masthead-nav-link', false)
            ->assertSee('fa-solid fa-house', false)
            ->assertSee('fa-solid fa-layer-group', false)
            ->assertSee('fa-solid fa-compass-drafting', false)
            ->assertSee('fa-solid fa-diagram-project', false)
            ->assertSee('Websites made to perform.')
            ->assertSee('Intelligence built for your business.')
            ->assertSee('Security you can count on.')
            ->assertSee('kadetech.online@gmail.com')
            ->assertSee('kadetech-african-tech.jpg', false)
            ->assertSee('kadetech-web-development.jpg', false)
            ->assertSee('kadetech-ai-machine-learning.jpg', false)
            ->assertSee('kadetech-camera-security.jpg', false)
            ->assertSee('fa-solid fa-laptop-code', false)
            ->assertSee('All rights reserved.')
            ->assertSee('Back to top');
    }

    public function test_public_pages_are_available(): void
    {
        $pages = [
            'home' => 'Digital power.',
            'services' => 'Services in detail',
            'why-us' => 'Good technology starts with a better question.',
            'projects' => 'What we have built',
            'contact' => 'A clear next step starts here.',
        ];

        foreach ($pages as $routeName => $content) {
            $this->get(route($routeName))
                ->assertOk()
                ->assertSee('KADETECH')
                ->assertSee('data-page-content', false)
                ->assertSee('data-page-link', false)
                ->assertSee($content);
        }
    }

    public function test_all_public_heroes_use_the_shared_services_shell(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $this->get(route($routeName))
                ->assertOk()
                ->assertSee('bg-navy-900 pb-20 pt-32 text-white', false)
                ->assertSee('hero-grid opacity-60', false)
                ->assertSee('lg:grid-cols-[0.82fr_1.18fr]', false)
                ->assertSee('text-[2.8rem]', false);
        }
    }

    public function test_projects_page_renders_the_scrolling_project_steps(): void
    {
        $this->get(route('projects'))
            ->assertOk()
            ->assertSee('id="projects"', false)
            ->assertSee('What we have built')
            ->assertSee('E-Kanisa')
            ->assertSee('KADEPOS')
            ->assertSee('KADEFinance')
            ->assertSee('REMS')
            ->assertSee('id="e-kanisa"', false)
            ->assertSee('id="kadepos"', false)
            ->assertSee('id="kadefinance"', false)
            ->assertSee('id="rems"', false)
            ->assertSee('data-project-step', false)
            ->assertDontSee('data-project-dot', false)
            ->assertDontSee('project-dots', false)
            ->assertDontSee('Work Experience')
            ->assertDontSee('A professional journey')
            ->assertDontSee('National Office Auditing of Tanzania');
    }

    public function test_services_page_links_to_the_built_systems(): void
    {
        $this->get(route('services'))
            ->assertOk()
            ->assertSee(route('projects').'#e-kanisa', false)
            ->assertSee(route('projects').'#kadepos', false)
            ->assertSee(route('projects').'#rems', false)
            ->assertDontSee('View category');
    }

    public function test_header_topbar_shows_contact_details_with_icons(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('fa-solid fa-location-dot', false)
            ->assertSee('Dodoma, Tanzania')
            ->assertSee('fa-solid fa-envelope', false)
            ->assertSee('fa-solid fa-circle-check', false)
            ->assertSee('fa-solid fa-phone', false)
            ->assertSee('kadetech.online@gmail.com')
            ->assertDontSee('software company')
            ->assertDontSee('Independent digital + security studio')
            ->assertDontSee('Dodoma &middot; Tanzania', false);
    }

    public function test_mobile_menu_toggle_hides_the_inactive_icon_with_the_hidden_attribute(): void
    {
        $response = $this->get(route('home'))->assertOk();

        $response->assertSee('<i data-close-icon class="fa-solid fa-xmark h-5 w-5" hidden', false)
            ->assertDontSee('<i data-menu-icon class="fa-solid fa-bars h-5 w-5" hidden', false)
            ->assertDontSee('fa-xmark hidden', false);
    }

    public function test_public_heroes_have_no_vertical_line_decoration(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $this->get(route($routeName))
                ->assertOk()
                ->assertDontSee('left-[7%]', false);
        }
    }

    public function test_public_heroes_drop_the_eyebrow_label(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $content = $this->get(route($routeName))
                ->assertOk()
                ->getContent();

            $heroStart = strpos($content, 'class="relative z-10 reveal is-visible"');
            $heroEnd = strpos($content, '</h1>', $heroStart);

            $this->assertNotFalse($heroStart, "Hero wrapper missing on [{$routeName}].");
            $this->assertNotFalse($heroEnd, "Hero heading missing on [{$routeName}].");

            $hero = substr($content, $heroStart, $heroEnd - $heroStart);

            $this->assertStringNotContainsString('eyebrow', $hero);
            $this->assertStringContainsString('text-[2.8rem]', $hero);
        }
    }

    public function test_contact_page_displays_map_and_form(): void
    {
        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('Tell us what you need.')
            ->assertSee('google.com/maps', false)
            ->assertSee('name="name"', false)
            ->assertSee('name="message"', false)
            ->assertSee('data-ajax-form', false)
            ->assertSee(route('contact.submit'), false);
    }

    public function test_contact_form_sends_a_message(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.submit'), [
            'name' => 'Asha Mwakalinga',
            'email' => 'asha@example.com',
            'service' => 'web',
            'message' => 'I need a responsive website for my growing business.',
        ]);

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHas('contact_success');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail): bool {
            return $mail->hasTo('kadetech.online@gmail.com')
                && $mail->data['email'] === 'asha@example.com'
                && $mail->data['service_label'] === 'Website or platform';
        });
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $this->post(route('contact.submit'), [])
            ->assertSessionHasErrors(['name', 'email', 'service', 'message']);
    }
}
