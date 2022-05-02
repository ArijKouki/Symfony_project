<?php

namespace App\DataFixtures;

use App\Entity\Job;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JobFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data=["Dentist","Registered Nurse","Pharmacist","Computer Systems Analyst","Physician","Database Administrator","Software Developer",
            "Physical Therapist","Web Developer","Dental Hygienist","Occupational Therapist","Veterinarian","Computer Programmer","School Psychologist",
            "Physical Therapist Assistant",	"Interpreter & Translator","Mechanical Engineer","Veterinary Technologist & Technician","Epidemiologist",
            "IT Manager","Market Research Analyst",	"Diagnostic Medical Sonographer","Computer Systems Administrator","Respiratory Therapist"	,
            "Medical Secretary","Civil Engineer","Substance Abuse Counselor","Speech-Language Pathologist",	"Landscaper & Groundskeeper",
            "Radiologic Technologist","Cost Estimator","Financial Advisor",	"Marriage & Family Therapist","Medical Assistant","Lawyer","Accountant"];
        for($i=0;$i<count($data);$i++){
            $job=new Job();
            $job->setDesignation($data[$i]);
            $manager->persist($job);

        }
        $manager->flush();
    }
}
