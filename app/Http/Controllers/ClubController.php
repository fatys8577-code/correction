<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    private function getActivities(): array
    {
        return [
            [
                'slug' => 'laravel',
                'title' => 'Atelier Laravel',
                'description' => 'Introduction au framework Laravel.',
                'body' => 'Laravel est un framework PHP moderne...',
            ],
            [
                'slug' => 'git',
                'title' => 'Atelier Git',
                'description' => 'Gérer son code avec Git et GitHub.',
                'body' => 'Git est un outil de versioning indispensable...',
            ],
            [
                'slug' => 'html-css',
                'title' => 'Atelier HTML/CSS',
                'description' => 'Les bases du web avec HTML et CSS.',
                'body' => 'HTML structure la page, CSS la stylise...',
            ],
            [
                'slug' => 'javascript',
                'title' => 'Atelier JavaScript',
                'description' => 'Rendre vos pages web interactives.',
                'body' => 'JavaScript est le langage du navigateur...',
            ],
        ];
    }


    //
   public function activities()
{
    $activities = $this->getActivities();
    return view('club.activities', compact('activities'));
}

public function home()
{
    return view('club.home');
}

public function about()
{
    return view('club.about');
}

public function show(string $slug)
{
    $activity = collect($this->getActivities())
        ->firstWhere('slug', $slug);

    if (!$activity) {
        abort(404);
    }
    return view('club.activity-show', compact('activity'));
}
        
    
}
