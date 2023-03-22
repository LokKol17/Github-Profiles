<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function user(Request $request)
    {
        $nickname = $request->get('nickname');

        if (empty($nickname)) {
            return view('homepage')->with('errorMessage', 'Nickname is required');
        }

        $url = $this->getUrl($nickname);
        $response = $this->tryGetUser($url);
        $jsonData = $response->getBody()->getContents();

        $data = json_decode($jsonData, true);

        return view('profile')->with('data', $data);
    }

    private function getUrl(string $nickname): string
    {
        return "https://api.github.com/users/$nickname";
    }

    private function tryGetUser($url): View|ResponseInterface|Application|Factory
    {
        try {
            $client = new Client();
            return $client->get($url, [
                'verify' => false,
            ]);
        } catch (GuzzleException $e) {
            return view('homepage')->with('errorMessage', 'User not found');
        }
    }

}
