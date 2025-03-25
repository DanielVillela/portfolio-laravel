<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Display a Host info.
     */
    public function host(Request $request)
    {
        $host = $request->getHost();
        $port = $request->getPort();
        $httpHost = $request->getHttpHost();
        $url = $request->url();
        $fullUrl = $request->fullUrl();
        $schemeAndHost = $request->schemeAndHttpHost();

        Log::info("Host: $host"); // Registra no log do Laravel
        Log::info("Port: $port");
        Log::info("HTTP Host: $httpHost");
        Log::info("URL: $url");
        Log::info("Full URL: $fullUrl");
        Log::info("Scheme and Host: $schemeAndHost");
        
        return view('host', [
            'host' => $host,
            'port' => $port,
            'httpHost' => $httpHost,
            'url' => $url,
            'fullUrl' => $fullUrl,
            'schemeAndHost' => $schemeAndHost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
