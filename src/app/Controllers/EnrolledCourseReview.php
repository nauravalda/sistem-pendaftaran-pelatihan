<?php

namespace App\Controllers;

class EnrolledCourseReview extends BaseController
{
    public function index(): string
    {
        $data = [
            'name' => 'The Complete Python Bootcamp From Zero to Hero in Python',
            'url_img' => '',
            'desc' => 'Learn Python like a Professional Start from the basics and go all the way to creating your own applications and games',
            'price' => 28000,
            'tags' => '#PythonBootcamp #PythonProgramming #LearnPython #CodingBootcamp #ProgrammingCourse #PythonFromZeroToHero #PythonDevelopment #CodingSkills #ProgrammingBeginner #SoftwareDevelopment #PythonLea...',
            'locations' => 'Jalan Mawar Indah VIII No. 15, RT 03/RW 07, Kelurahan Kebonwaru, Kecamatan Batununggal, Bandung',
            'participants' => 99,
            'data_review' => [
                [
                    'name' => 'Aan Bejir',
                    'rating' => 5,
                    'desc' => 'Everything on this course is a goldmine except for the GUI since it\'s specific for Jupyter Notebooks and it\'s missing the video for GUI Events. Still it was a nice introduction to GUI. Don\'t let that disappoint you though. THIS IS A MUST HAVE COURSE. I have already recommended it to few people and always will. Do yourself a favor and do this course if you want to learn Python 3. Thank you so much for this course, Jose-sensei!!'
                ],
                [
                    'name' => 'Naura Bejir',
                    'rating' => 4.8,
                    'desc' => 'TST matkulnya sangat bermutu dan keren dan berbobot sekalih!!!'
                ]
            ],
            'courseBenefit' => [
                'You will learn how to leverage the power of Python to solve tasks.',
                'You will build games and programs that use Python libraries.',
                'You will be able to use Python for your own work problems or personal projects.',
                'You will create a portfolio of Python based projects you can share.'
            ],
            'courseContent' => [
                'Python Object and Data Structure Basics',
                'Python Comparison Operators',
                'Python Statements',
                'Methods and Functions',
                'Milestone Project -1',
                'Object Oriented Programming'
            ],
            'description' => 'Become a Python Programmer and learn one of employer\'s most requested skills of 2023! This is the most comprehensive, yet straight-forward, course for the Python programming language on Udemy! Whether you have never programmed before, already know basic syntax, or want to learn about the advanced features of Python, this course is for you! In this course we will teach you Python 3. With over 100 lectures and more than 21 hours of video this comprehensive course leaves no stone unturned! This course includes quizzes, tests, coding exercises and homework assignments as well as 3 major projects to create a Python project portfolio! Learn how to use Python for real-world tasks, such as working with PDF Files, sending emails, reading Excel files, Scraping websites for informations, working with image files, and much more! This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you! We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered. We cover a wide variety of topics, including:'
        ];
        return view('enrolledCourseReview', $data);
    }
}
