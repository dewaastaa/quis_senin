<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * Test Welcome page (Landing Page with Enter button and without Header)
     */
    public function test_welcome_page_is_accessible_has_enter_button_and_no_header(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Welcome to the Website');
        $response->assertSee("DEWA'S PORTFOLIO");
        $response->assertSee('Enter Website');
        $response->assertSee(route('home'));
        
        // Ensure header is NOT present on the welcome page
        $response->assertDontSee('Back to Welcome');
        $response->assertDontSee('<header', false);
    }

    /**
     * Test Page 1 (Home) with Variables and with Header & Back button
     */
    public function test_home_page_is_accessible_displays_variables_and_has_header(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
        $response->assertSee('Portfolio');
        $response->assertSee('Dewa Putu Winaya');
        $response->assertSee('2501010261');

        // Ensure header is present
        $response->assertSee('Laravel 12');
        $response->assertSee('Home');
        $response->assertSee('Back to Welcome');
        $response->assertSee(route('welcome'));
    }

    /**
     * Test Page 2 (About Me) with While Looping and with Header & Back button
     */
    public function test_about_page_is_accessible_and_displays_while_loop(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('Student Profile');
        $response->assertSee('SD Negeri 1 Baturiti');
        $response->assertSee('SMP Negeri 1 Kerambitan');
        $response->assertSee('Timeline While');

        // Ensure header and back button are present
        $response->assertSee('Laravel 12');
        $response->assertSee('Back to Welcome');
    }

    /**
     * Test Page 3 (Gallery) with Local Images and with Header & Back button
     */
    public function test_gallery_page_is_accessible_and_displays_photos(): void
    {
        $response = $this->get('/gallery');

        $response->assertStatus(200);
        $response->assertSee('Photo Documentation');
        $response->assertSee('images/');

        // Ensure header and back button are present
        $response->assertSee('Laravel 12');
        $response->assertSee('Back to Welcome');
    }

    /**
     * Test Separated Header and Footer are rendered on inner website pages
     */
    public function test_separated_header_and_footer_are_rendered(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
        // Ensure separated header is rendered
        $response->assertSee('Home');
        $response->assertSee('Back to Welcome');

        // Ensure separated footer is rendered
        $response->assertSee('Laragon Web Practicum');
        $response->assertSee('MVC Architecture');
    }
}
