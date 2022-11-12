<?php

namespace App\Http\Controllers;

use App\Models\InstagramApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstagramApiController extends Controller
{
    private $id = 14;

    public function getMedia()
    {
        if(env('APP_ENV') =='local') {
            return $this->returnTestPhotos();
        }

        $instagram = InstagramApi::find($this->id);

        if(!isset($instagram)) {
            return $this->returnTestPhotos();
        }

        if(!isset($instagram->access_token)) {
            return null;
        }

        $response = Http::get('https://graph.instagram.com/me/media?'
                                . 'fields=id,media_url,username,timestamp'
                                . '&access_token=' . $instagram->access_token)->object();

        if(isset($response->error)){
            // Avisar Fernanda para re-autorizar o acesso ao Instagram.
            // Criar essa opção no admin
            return null;
        }

        $fotos = $response->data;

        return $fotos;
    }

    public function getNewCode()
    {
        $instagram = InstagramApi::find($this->id);

        $url = 'https://www.instagram.com/oauth/authorize?'
                    . 'client_id=' . $instagram->client_id
                    . '&redirect_uri=' . $instagram->redirect_uri
                    . '&scope=user_profile,user_media'
                    . '&response_type=code';

        return redirect($url);
    }

    public function getNewToken(Request $request)
    {
        $instagram = InstagramApi::find($this->id);

        $response = Http::asForm()
                ->post('https://api.instagram.com/oauth/access_token', [
                         'client_id'        => $instagram->client_id
                        ,'client_secret'    => $instagram->client_secret
                        ,'redirect_uri'     => $instagram->redirect_uri
                        ,'code'             => $request->code
                        ,'grant_type'       => 'authorization_code'
                        ]
                    )->object();

        $shortLivedToken = $response->access_token;

        /*
           Após AppReview
        */
        //$longLivedToken = $this->getLongLivedToken($shortLivedToken,$instagram->client_secret);
        //$instagram->access_token = $longLivedToken;

        $instagram->access_token = $shortLivedToken;

        $instagram->user_id = $response->user_id;
        $instagram->username = $this->returnUsername($response->access_token);
        $instagram->save();

        return redirect('/');
    }

    private function getLongLivedToken($access_token, $client_secret)
    {
        $response = Http::asForm()
                ->post('https://graph.instagram.com/access_token', [
                         'grant_type'       => 'ig_exchange_token'
                        ,'client_secret'    =>  $client_secret
                        ,'access_token'     =>  $access_token
                        ]
                    )->object();

        return $response->access_token;
    }

    private function returnUsername($access_token)
    {
        $response = Http::get('https://graph.instagram.com/me/?'
                                . 'fields=username'
                                . '&access_token=' . $access_token
                            )->object();

        return $response->username;
    }

    public function returnTestPhotos()
    {

        return (object) [
                  (object) ['media_url' => "/images/insta-feed-stg/insta-feed1.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed2.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed3.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed4.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed5.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed1.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed2.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed3.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed4.jpg"]
                 ,(object) ['media_url' => "https://images.pexels.com/photos/9509207/pexels-photo-9509207.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
                  ,(object) ['media_url' => "https://images.pexels.com/photos/5840867/pexels-photo-5840867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
                  ,(object) ['media_url' => "https://images.pexels.com/photos/8123145/pexels-photo-8123145.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
                  ,(object) ['media_url' => "https://images.pexels.com/photos/12789673/pexels-photo-12789673.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
                  ,(object) ['media_url' => "https://images.pexels.com/photos/4834992/pexels-photo-4834992.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
                  ,(object) ['media_url' => "https://images.pexels.com/photos/13516347/pexels-photo-13516347.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed5.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed1.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed2.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed3.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed4.jpg"]
                 ,(object) ['media_url' => "/images/insta-feed-stg/insta-feed5.jpg"]

            ];
        // return (object) [
        //           (object) ['media_url' => "https://images.pexels.com/photos/9509207/pexels-photo-9509207.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
        //          ,(object) ['media_url' => "https://images.pexels.com/photos/5840867/pexels-photo-5840867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
        //          ,(object) ['media_url' => "https://images.pexels.com/photos/8123145/pexels-photo-8123145.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
        //          ,(object) ['media_url' => "https://images.pexels.com/photos/12789673/pexels-photo-12789673.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
        //          ,(object) ['media_url' => "https://images.pexels.com/photos/4834992/pexels-photo-4834992.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
        //          ,(object) ['media_url' => "https://images.pexels.com/photos/13516347/pexels-photo-13516347.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]
        //     ];
    }
}
