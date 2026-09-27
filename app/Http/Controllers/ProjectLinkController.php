<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;

class ProjectLinkController extends Controller
{
    /**
     * Resolve a shareable short link such as /e-kanisa.
     *
     * Sends visitors to the deployed system once a project has a url, and to
     * its section on the projects page until then, so a shared link never
     * lands on a dead address.
     */
    public function __invoke(string $project): RedirectResponse
    {
        $projects = collect(Config::get('projects', []))->keyBy('id');

        abort_unless($projects->has($project), 404);

        $url = $projects->get($project)['url'] ?? '';

        if (filled($url)) {
            return redirect()->away($url);
        }

        return redirect()->to(route('projects').'#'.$project);
    }
}
