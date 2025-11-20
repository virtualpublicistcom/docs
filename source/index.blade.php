@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Use this Knowledge Base to master our ecosystem — from securing elite networking opportunities to executing high-level growth strategies. <br /> We are here to help you navigate your breakthrough.</p>

            <div class="flex my-10">
                <a href="{{ $page->baseUrl }}/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Instant Access </a>
            </div>
        </div>

        <img src="/assets/img/logo-larg-vp.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-10 mb-6 lg:mb-0 max-w-72 opacity-40">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Smart Campaign Engine</h3>

            <p> Bypass the gatekeepers. Gain direct access to our searchable, verified database of influential music journalists, playlist curators, and record label executives tailored specifically to your genre.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Global Industry Network</h3>

            <p>Bypass the gatekeepers. Gain direct access to our searchable, verified database of influential music journalists, playlist curators, and record label executives tailored specifically to your genre.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">AI Narrative Architect</h3>

            <p>Create agency-grade assets in seconds. Our AI transforms your basic info into professional press releases and persuasive pitch decks designed to captivate editors and secure coverage. </p>
        </div>
    </div>
</section>
@endsection
