@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Check out our guides or reach out for support. We're here to help you<br /> take your music career to the next level!</p>

            <div class="flex my-10">
                <a href="{{ $page->baseUrl }}/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>
            </div>
        </div>

<<<<<<< HEAD
        <img src="{{ $page->baseUrl }}/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 max-w-96 opacity-40">
=======
        <img src="/assets/img/logo-larg-vp.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 max-w-96 opacity-40">
>>>>>>> db769f4 (new changes of kb logo)
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Campaign Generator</h3>

            <p>The Campaign Generator makes it easy to create and manage PR campaigns by streamlining the outreach process.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Search the Contacts</h3>

            <p>The Search the Contacts feature offers access to a curated database of verified music journalists, bloggers, and playlist curators.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Press Release Generator</h3>

            <p>The Press Release Generator automates the process of crafting professional press materials. </p>
        </div>
    </div>
</section>
@endsection
