<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ne_NP;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    ];

    protected array $firstNameMale = [
        'Aadarsh', 'Aadesh', 'Aaditya', 'Aakash', 'Aanand', 'Abud', 'Achyut', 'Ajay', 'Ajit', 'Akhil', 'Akshar', 'Akshay', 'Amar', 'Amir', 'Amit', 'Amod', 'Amrit', 'Amulya', 'Ananta', 'Angel', 'Angikar', 'Anil', 'Ankit', 'Ankur', 'Anmol', 'Anshu', 'Anuj', 'Arjun', 'Arun', 'Ashish', 'Ashok', 'Ashutosh', 'Atal', 'Avinash', 'Ayush',
        'Babish', 'Badal', 'Badri', 'Baibhav', 'Bhagwam', 'Bhakti', 'Bhanu', 'Bibek', 'Bicky', 'Bidur', 'Bidwan', 'Bikal', 'Bikash', 'Bikesh', 'Bikram', 'Bimal', 'Binamra', 'Binay', 'Bipin', 'Biplav', 'Bipul', 'Biraj', 'Birendra', 'Bishal', 'Bisu', 'Biswas', 'Brijesh', 'Buddha',
        'Chaitanya', 'Chandan', 'Chandra', 'Chirag',
        'Darpan', 'Deep', 'Deepak', 'Dev', 'Dhairya', 'Dharma', 'Dharmendra', 'Dhiren', 'Diwakar', 'Diwash',
        'Eklavya',
        'Gajendra', 'Gaurav', 'Girish', 'Gokul', 'Gopal', 'Govinda', 'Grija', 'Gyanraj',
        'Hans', 'Hardik', 'Hari', 'Harsa', 'Hemant', 'Himal', 'Hitesh', 'Hridaya',
        'Ishwar',
        'Jitendra', 'Jivan',
        'Kabindra', 'Kailash', 'Kalyan', 'Kamal', 'Kamod', 'Kapil', 'Karan', 'Karna', 'Khagendra', 'Kishor', 'Kris', 'Krishna', 'Krisus', 'Kuber',
        'Lakshman', 'Lalit', 'Lava', 'Lochan', 'Lokesh',
        'Madhav', 'Madhukar', 'Madhur', 'Mandeep', 'Manish', 'Manjul', 'Manoj', 'Milan', 'Mohit', 'Mridul',
        'Nabin', 'Nakul', 'Narayan', 'Narendra', 'Naresh', 'Neil', 'Nerain', 'Nirajan', 'Nirmal', 'Nirupam', 'Nischal', 'Nishad', 'Nishant', 'Nutan',
        'Om',
        'Paras', 'Parikshit', 'Parimal', 'Pawan', 'Piyush', 'Prabal', 'Prabesh', 'Prabhat', 'Prabin', 'Prajwal', 'Prakash', 'Pramesh', 'Pramod', 'Pranaya', 'Pranil', 'Prasanna', 'Prashant', 'Prasun', 'Pratap', 'Pratik', 'Prayag', 'Prianshu', 'Prithivi', 'Purna', 'Pushkar',
        'Raghab', 'Rahul', 'Rajan', 'Rajesh', 'Rakesh', 'Ramesh', 'Ranjan', 'Ranjit', 'Ricky', 'Rijan', 'Rishab', 'Rishikesh', 'Rohan', 'Rohit', 'Roshan',
        'Sabin', 'Sachit', 'Safal', 'Sahaj', 'Sahan', 'Sajal', 'Sakar', 'Samir', 'Sanchit', 'Sandesh', 'Sanjay', 'Sanjeev', 'Sankalpa', 'Santosh', 'Sarad', 'Saroj', 'Sashi', 'Saumya', 'Sevak', 'Shailesh', 'Shakti', 'Shamundra', 'Shantanu', 'Shashank', 'Shashwat', 'Shekar', 'Shyam', 'Siddhartha', 'Sitaram', 'Sohan', 'Sohil', 'Soviet', 'Spandan', 'Subal', 'Subham', 'Subodh', 'Sudan', 'Sudhir', 'Sudin', 'Sudip', 'Sujan', 'Sujit', 'Sukanta', 'Sumel', 'Sunil', 'Suraj', 'Surendra', 'Surya', 'Sushant', 'Sushil', 'Suyash', 'Suyog', 'Swagat', 'Swapnil', 'Swarup',
        'Tej', 'Tilak', 'Tirtha', 'Trailokya', 'Trilochan',
        'Udit', 'Ujjwal', 'Umesh', 'Uttam',
        'Yogendra', 'Yogesh', 'Yuvaraj',
    ];

    protected array $firstNameFemale = [
        'Aakansha', 'Aanchal', 'Aarati', 'Aashika', 'Aayusha', 'Alisha', 'Ambika', 'Amrita', 'Anamika', 'Anita', 'Anjali', 'Anjana', 'Anjela', 'Anju', 'Ankita', 'Ansu', 'Anu', 'Anupa', 'Anushree', 'Anuska', 'Apeksha', 'Archana', 'Arpita', 'Aruna', 'Asha',
        'Bandita', 'Barsa', 'Bhawana', 'Bimala', 'Bina', 'Bindu', 'Binita', 'Bipana',
        'Chadani', 'Chameli', 'Champa', 'Chandana',
        'Damini', 'Deepa', 'Deepti', 'Depika', 'Dibya', 'Diksha', 'Dilmaya', 'Dipshika', 'Durga',
        'Ganga', 'Garima', 'Gauri', 'Gita', 'Goma', 'Grishma',
        'Harsika', 'Hema', 'Himani',
        'Isha', 'Ishika', 'Ishwari',
        'Jamuna', 'Janaki', 'Januka', 'Jiya', 'Junu',
        'Kabita', 'Karuna', 'Kaushika', 'Khusbhu', 'Komal', 'Kopila', 'Kripa', 'Kriti', 'Kritika', 'Kshitz', 'Kumud', 'Kusum',
        'Lalita', 'Lata', 'Laxmi', 'Lina', 'Luna',
        'Madhavi', 'Madhuri', 'Mamata', 'Manila', 'Manita', 'Manjita', 'Manju', 'Maya', 'Mayabati', 'Mayushi', 'Menka', 'Menuka', 'Mina', 'Mira', 'Motiva', 'Mukti', 'Muna',
        'Nabina', 'Namrata', 'Nandani', 'Nilam', 'Nira', 'Nirmali', 'Nisha', 'Nishita',
        'Pallavi', 'Parijat', 'Pavitra', 'Pinky', 'Prabha', 'Prabina', 'Prabriti', 'Prakriti', 'Pramila', 'Prapti', 'Pratiksha', 'Pratima', 'Preeti', 'Prekshya', 'Prenana', 'Priya', 'Priyanka', 'Puja', 'Punam', 'Purnima', 'Puspa',
        'Rabina', 'Radha', 'Radhika', 'Raksha', 'Rama', 'Ramita', 'Rampyari', 'Rani', 'Ranjana', 'Ranju', 'Rashmi', 'Rejina', 'Rekha', 'Renu', 'Renuka', 'Reshami', 'Riddhi', 'Rina', 'Ritu', 'Roshni', 'Rupa',
        'Sabina', 'Sabita', 'Sacheta', 'Sachita', 'Sadhana', 'Safala', 'Sagina', 'Sahana', 'Saileja', 'Sajala', 'Sakshi', 'Sakuntala', 'Samjhana', 'Sampada', 'Samridhi', 'Sangita', 'Sanjana', 'Sanskriti', 'Santoshi', 'Sarala', 'Saraswati', 'Sarina', 'Sarita', 'Sarmila', 'Sarupa', 'Saubhagya', 'Shanti', 'Shasikala', 'Shova', 'Shraddha', 'Shreya', 'Shrija', 'Shristi', 'Shriya', 'Shusila', 'Simran', 'Sita', 'Smriti', 'Sneha', 'Soni', 'Srijana', 'Subheksha', 'Sujata', 'Sukriti', 'Sulochana', 'Sumi', 'Sumnima', 'Sunila', 'Surakshya', 'Susma', 'Susmita', 'Suyesha', 'Swechchha',
        'Tara', 'Tulsi',
        'Uma', 'Urbasi', 'Urmila', 'Usha',
        'Vandana',
        'Yami', 'Yasodha', 'Yushma',
    ];

    protected array $lastName = [
        'Acharya', 'Adhikari', 'Agarwal', 'Amatya', 'Aryal',
        'Baidya', 'Bajracharya', 'Balami', 'Banepali', 'Baniya', 'Banjade', 'Baral', 'Basnet', 'Bastakoti', 'Bastola', 'Basyal', 'Belbase', 'Bhandari', 'Bhatta', 'Bhattarai', 'Bhusal', 'Bijukchhe', 'Bisht', 'Bohara', 'Budathoki', 'Byanjankar',
        'Chalise', 'Chamling', 'Chapagain', 'Chaudhary', 'Chhetri',
        'Dahal', 'Dangol', 'Dawadi', 'Devkota', 'Dhakal', 'Dhamla', 'Dhaubhadel', 'Dhungel',
        'Gauchan', 'Gautam', 'Ghale', 'Ghimire', 'Giri', 'Golchha', 'Gurung', 'Gyalzen', 'Gyawali',
        'Hamal', 'Himanshu', 'Humagain',
        'Jha', 'Joshi',
        'Kafle', 'Kandel', 'Kansakar', 'Karki', 'Karmacharya', 'Karna', 'Katwal', 'Kayastha', 'KC', 'Khadka', 'Khadgee', 'Khan', 'Khanal', 'Kharel', 'Khatiwada', 'Khatri', 'Khawas', 'Koirala',
        'Lama', 'Lamichhane', 'Lamsal', 'Lawoti', 'Ligal', 'Limbu', 'Lohani',
        'Magar', 'Maharjan', 'Mainali', 'Malakar', 'Maleku', 'Manandhar', 'Marhatta', 'Mishra',
        'Nakarmi', 'Napit', 'Nemkul', 'Nepal', 'Neupane', 'Niroula',
        'Ojha',
        'Pachhai', 'Pahari', 'Pandey', 'Pangeni', 'Panta', 'Parajuli', 'Pathak', 'Paudel', 'Pokhrel', 'Pradhan', 'Prajapati', 'Puri',
        'Rai', 'Raimajhi', 'Rana', 'Ranabhat', 'Rasali', 'Rauniyar', 'Rawat', 'Regmi', 'Rijal', 'Rimal', 'Rinpoche',
        'Sarraf', 'Shah', 'Shahi', 'Shakya', 'Sharma', 'Sherpa', 'Shrestha', 'Silwal', 'Simkhada', 'Singh', 'Sitoula', 'Subedi',
        'Tamang', 'Tamrakar', 'Thakur', 'Thapa', 'Thapa Magar', 'Thuladhar', 'Thule', 'Tuladhar',
        'Upadhyaya',
        'Veswakar',
        'Wagle',
        'Yadav',
    ];

    private array $middleNameMale = ['Bahadur', 'Dev', 'Kumar', 'Man', 'Mani', 'Nath', 'Prasad', 'Raj', 'Ratna'];
    private array $middleNameFemale = ['Devi', 'Kumari'];

    /**
     * @example 'Bahadur'
     */
    public function middleNameMale(): string
    {
        return $this->randomizer->randomElement($this->middleNameMale);
    }

    /**
     * @example 'Devi'
     */
    public function middleNameFemale(): string
    {
        return $this->randomizer->randomElement($this->middleNameFemale);
    }

}
