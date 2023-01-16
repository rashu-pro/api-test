<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiTest extends Controller
{
    //
    public function index(){
        $announcements = array(
            array(
                'title'=>'A Life of Giving Thanks',
                'image'=>'http://api-test.test/images/jummah-namaz.jpg',
                'date'=>'16/01/2023',
                'description'=> '<div class="ds-event-body"><p class="m-0 mb-1">Assalam-O-Alaikum Community Members,</p><p>Please note next week on Friday November 25, 2022</p><p class="text-underline">Jummah Khutbah topic is:</p><p class="text-highlight text-center text-uppercase"><span class="text-bold">A LIFE OF GIVING THANKS</span><br> <span class="text-small text-normalcase">By IMAM SAFI KHAN</span></p><p class="pt-2">There is no shortage of blessings to be thankful for. What is the importance of thankfulness? How should we express it and what effects should it have on us? We reflect on blessings and the true manifestation of thankfulness and gratitude. Saying Alhamdolilah.</p></div>'
            ),
            array(
                'title'=>'ICS THANKSGIVING PICNIC',
                'image'=>'http://api-test.test/images/thanks-giving.jpg',
                'date'=>'Saturday, November 26',
                'description'=>'<div><h4>Assalamu Alaikum Dear Community Members,</h4><h3>ICS is exited for the upcoming picnic!</h3>Insha Allah On:<p><strong>Date: </strong> Saturday, November 26</p><p><strong>Time: </strong> 12PM - 5PM</p><p><strong>Location: </strong> Islamic Center of Southlake</p><p>The ICS social team has planned a fun filled picnic for al ages Insha Allah. Please join us in celebrating community spirit and friendship at the masjid.</p><p>We look forward to seeing you all there with families!</p></div>'
            )
        );
        return [
            "heading_top" => "PLEASE DONATE FOR THE MULTIPURPOSE HALL",
            "status" => 1,
            "announcements"=> $announcements,
        ];
    }
}
