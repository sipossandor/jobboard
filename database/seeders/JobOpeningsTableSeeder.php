<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobOpeningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_openings')->delete();
        
        \DB::table('job_openings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'department' => 'Engineering',
                'language_required' => 'English',
                'job_title' => 'Sr. JAVA SOFTWARE ENGINEER',
                'job_description' => 'Developing new features
Code testing and reviewing
Mentoring junior colleagues',
                'requirements' => 'Java
Spring Boot
SQL knowledge
Maven',
                'salary' => '1.000.000 HUF',
                'starting_date' => 'As soon as possible',
                'created_at' => '2022-09-20 20:28:43',
                'updated_at' => '2022-09-20 20:45:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country' => 'Hungary',
                'city' => 'Szeged',
                'department' => 'Engineering',
                'language_required' => 'English',
                'job_title' => 'Manual Tester',
                'job_description' => 'Writes and maintains test cases
Support software development team
Learn new technologies',
                'requirements' => 'Min. 3 years of relevant experience
Intermediate English knowledge
ISTQB',
                'salary' => '700.000 - 800.000 HUF',
                'starting_date' => 'Nov 2022',
                'created_at' => '2022-09-20 20:31:24',
                'updated_at' => '2022-09-20 20:31:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country' => 'Hungary',
                'city' => 'Szeged',
                'department' => 'Engineering',
                'language_required' => 'English & German',
                'job_title' => 'Data Engineer',
                'job_description' => 'Implement data engineering solutions
Work in an agile team
Develop data-related tools
Managing transformations',
            'requirements' => 'Programming skills (Python)
API
Bachelor\'s Degree',
                'salary' => '1.200.000 - 1.250.000 HUF',
                'starting_date' => 'Oct 2022',
                'created_at' => '2022-09-20 20:34:28',
                'updated_at' => '2022-09-20 20:34:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'department' => 'Human Resources',
                'language_required' => 'English',
                'job_title' => 'Junior IT Recruiter',
                'job_description' => 'Sourcing new candidates
Writing job descriptions
Conduct interviews',
                'requirements' => 'Intermediate English skills
BSc degree
Willing to learn IT related topics',
                'salary' => '300.000 - 400.000 HUF',
                'starting_date' => 'Dec 2022',
                'created_at' => '2022-09-20 20:37:26',
                'updated_at' => '2022-09-20 20:37:26',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country' => 'Hungary',
                'city' => 'Debrecen',
                'department' => 'Engineering',
                'language_required' => 'English',
                'job_title' => 'Linux System Engineer',
                'job_description' => 'Maintenance of Linux servers
Monitoring
Incident and change management',
                'requirements' => '1-3 years of work experience
Linux (RedHat)
Database knowledge (MySQL, MariaDB)',
                'salary' => '800.000 - 1.000.000 HUF',
                'starting_date' => '2023',
                'created_at' => '2022-09-20 20:40:30',
                'updated_at' => '2022-09-20 20:40:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country' => 'Hungary',
                'city' => 'Sopron',
                'department' => 'Engineering',
                'language_required' => 'English',
                'job_title' => 'Java Software Developer',
                'job_description' => 'Design and implement features in REST API components
Deliver high-quality code',
                'requirements' => 'Java, Spring, REST APIs, AWS, PostgreSQL, Elasticsearch',
                'salary' => '-',
                'starting_date' => 'ASAP',
                'created_at' => '2022-09-20 20:42:47',
                'updated_at' => '2022-09-20 20:42:47',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'department' => 'Engineering',
                'language_required' => 'English',
                'job_title' => 'Python Developer',
                'job_description' => 'Develop database environment
Improve performance of application
Troubleshooting',
                'requirements' => 'Python, Numpy, Git, SQL',
                'salary' => '1.300.000 - 1.500.000 HUF',
                'starting_date' => 'Sept 2022',
                'created_at' => '2022-09-20 20:44:31',
                'updated_at' => '2022-09-20 20:44:31',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'country' => 'Hungary',
                'city' => 'Debrecen',
                'department' => 'Engineering',
                'language_required' => 'English',
                'job_title' => 'Lead Software Engineer',
                'job_description' => 'Lead the development of the company\'s main solutions
Provide architectural and design direction
Delegate tasks',
                'requirements' => 'PHP, Laravel, JavaScript, SQL, AWS',
                'salary' => '1.600.000 - 2.000.000 HUF',
                'starting_date' => 'Jan 2023',
                'created_at' => '2022-09-20 20:47:17',
                'updated_at' => '2022-09-20 20:47:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'country' => 'Hungary',
                'city' => 'Sopron',
                'department' => 'Engineering',
                'language_required' => 'Hungarian',
                'job_title' => 'Database Admin / Engineer',
                'job_description' => 'Patching, upgrading, monitoring, ticket handling',
                'requirements' => 'Linux/Unix, Oracle, PostgreSQL, Patroni Cluster, Kubernetes',
                'salary' => '-',
                'starting_date' => '2023',
                'created_at' => '2022-09-20 20:50:14',
                'updated_at' => '2022-09-20 20:50:14',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'department' => 'Engineering',
                'language_required' => 'English & German',
                'job_title' => 'Full Stack Developer',
                'job_description' => 'Write maintainable, clean code & higher level tests
Mentor colleagues
Low level technical design',
                'requirements' => 'Python, Angular, Vue, JavaScript, TypeScript, Restful APIs, Git,',
                'salary' => '1.200.000 - 1.500.000 HUF',
                'starting_date' => 'October 2022',
                'created_at' => '2022-09-20 20:52:20',
                'updated_at' => '2022-09-20 20:52:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}