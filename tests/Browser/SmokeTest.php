<?php

declare(strict_types=1);

it('can visit the auth pages', function (): void {
    $pages = visit([
        '/',
    ]);

    $pages->assertNoSmoke()
        // ->assertNoAccessibilityIssues()
        ->assertNoConsoleLogs()
        ->assertNoJavaScriptErrors();

    // [$homePage] = $pages;

    // $homePage->assertSee('Let\'s get started');
});
