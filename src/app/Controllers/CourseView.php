<?php

namespace App\Controllers;

// use App\Models\DashboardModel;

class CourseView extends BaseController
{
    // protected $dashboardReviewModel;
    // public function __construct(){
    //     $this->dashboardReviewModel = new DashboardModel();
    // }

    public function index(): string
    {
        // $dashboardReview = $this->dashboardReviewModel->getCourseById($id);
        
        // // Exception untuk halaman dengan id tidak ditemukan
        // if (empty($dashboardReview)){
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Course dengan id ' . $id . ' tidak ditemukan!');
        // }

        // $data = [
        //     'name' => $dashboardReview['name'],
        //     'url_img' => $dashboardReview['url_img'],
        //     'desc' => $dashboardReview['desc'],
        //     'price' => $dashboardReview['price'],
        //     'tags' => $dashboardReview['tags'],
        //     'locations' => $dashboardReview['locations'],
        //     'participants' => 99,
        //     'data_review' => [
        //         [
        //             'name' => 'Aan Bejir',
        //             'rating' => 5,
        //             'desc' => 'Everything on this course is a goldmine except for the GUI since it\'s specific for Jupyter Notebooks and it\'s missing the video for GUI Events. Still it was a nice introduction to GUI. Don\'t let that disappoint you though. THIS IS A MUST HAVE COURSE. I have already recommended it to few people and always will. Do yourself a favor and do this course if you want to learn Python 3. Thank you so much for this course, Jose-sensei!!'
        //         ],
        //         [
        //             'name' => 'Naura Bejir',
        //             'rating' => 4.8,
        //             'desc' => 'TST matkulnya sangat bermutu dan keren dan berbobot sekalih!!!'
        //         ]
        //     ],
        //     'courseBenefit' => $dashboardReview['what_you_will_learn'],
        //     'courseContent' => $dashboardReview['course_content']
        // ];

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
            'courseBenefit' =>
                'You will learn how to leverage the power of Python to solve tasks. You will build games and programs that use Python libraries. You will be able to use Python for your own work problems or personal projects. You will create a portfolio of Python based projects you can share.',

            'courseContent' =>
                'Python Object and Data Structure Basics, Python Comparison Operators, Python Statements, Methods and Functions, Milestone Project -1, Object Oriented Programming'
        ];
        return view('courseView', $data);
    }
}
