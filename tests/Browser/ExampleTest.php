<?php

declare(strict_types=1);

it('has a welcome page', function (): void {
    $page = visit('/');

    $page->assertSee('Let\'s get started');

    // $page->screenshot(filename: 'welcome-page-screenshot');
    // $page->inDarkMode()->screenshot(filename: 'welcome-page-screenshot-dark');
});
