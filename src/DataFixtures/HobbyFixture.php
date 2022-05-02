<?php

namespace App\DataFixtures;

use App\Entity\Hobby;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HobbyFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data=["basketball","golf"
            ,"running","walking-Walking" ,"soccer"
            ,"volleyball","badminton"
            ,"yoga","pilates"
            ,"swimming","ice skating"
            ,"roller skating","figure skating"
            ,"rugby","darts","football"
            ,"barre","tai chi","stretching"
            ,"bowling","ice hockey","surfing"
            ,"tennis","baseball","gymnastics"
            ,"rock climbing","dancing"
            ,"gardening","karate","horse racing"
            ,"snowboarding","skateboarding"
            ,"cycling","cheerleading"
            ,"archery","fishing","taekwondo"
            ,"fencing","water skiing","skiing"
            ,"jet skiing","weight lifting"
            ,"scuba diving","wind surfing"
            ,"kickboxing","sky diving","boxing"
            ,"board games","brewery games"
            ,"table tennis","hiking","bowling"
            ,"juggling","kickboxing","aerobics"
            ,"running track"];
        for($i=0;$i<count($data);$i++){
            $hobby=new Hobby();
            $hobby->setDesignation($data[$i]);
            $manager->persist($hobby);

        }
        $manager->flush();
    }
}
