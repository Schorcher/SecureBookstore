-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2017 at 11:58 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(55) NOT NULL,
  `isbn` text NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `term` text NOT NULL,
  `course` text NOT NULL,
  `num` int(55) NOT NULL,
  `professor` text NOT NULL,
  `course_number` int(55) NOT NULL,
  `required` text NOT NULL,
  `new_quantity` int(55) NOT NULL,
  `used_quantity` int(55) NOT NULL,
  `rental_quantity` int(55) NOT NULL,
  `ebook_quantity` int(55) NOT NULL,
  `new_price` decimal(10,2) NOT NULL,
  `used_price` decimal(10,2) NOT NULL,
  `rental_price` decimal(10,2) NOT NULL,
  `ebook_price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `author`, `term`, `course`, `num`, `professor`, `course_number`, `required`, `new_quantity`, `used_quantity`, `rental_quantity`, `ebook_quantity`, `new_price`, `used_price`, `rental_price`, `ebook_price`, `description`) VALUES
(979, '978-0073376356', 'Basics of Engineering Economy 2nd Edition', 'Blank; Leland', 'Spring 2015', 'ECON 2107', 3, 'Zeynep Arzu Kelani', 2316, 'Required', 60, 35, 58, 999998, '160.00', '120.00', '82.00', '131.80', 'This text covers the basic techniques and applications of engineering economy for all disciplines in the engineering profession.\n\nThe writing style emphasizes brief, crisp coverage of the principle or technique discussed in order to reduce the time taken to present and grasp the essentials.\n\nThe objective of the text is to explain and demonstrate the principles and techniques of engineering economic analysis as applied in different fields of engineering. This brief text includes coverage of multiple attribute evaluation for instructors who want to include non-economic dimensions in alternative evaluation and the discussion of risk considerations in the appendix, compared to Blank\'s comprehensive text, where these topics are discussed in two unique chapters.'),
(980, '978-0073511450', 'Essentials of Economics 3rd Edition', 'Bruce; Stanley L. ', 'Spring 2015', 'ECON 2107', 3, 'Zeynep Arzu Kelani', 2316, 'Required', 80, 62, 68, 999999, '213.15', '159.85', '109.00', '175.40', 'Building on the tremendous success of their best-selling Economics, Brue, McConnell, and Flynn have revised their one-semester approach in Essentials of Economics, 3e to provide a fresh alternative for the survey course. The result is a patient, substantive treatment of micro and macro topics appropriate for the introductory economics student, and fully integrated in the digital environment to provide instant remediation and feedback through McGraw-Hill\'s innovative assessment tool Connect Plus Economics. McGraw-Hill\'s adaptive learning component, LearnSmart, provides assignable modules that help students master core concepts in the course.\nConnect is the only integrated learning system that empowers students by continuously adapting to deliver precisely what they need, when they need it, and how they need it, so that your class time is more engaging and effective.'),
(981, '978-0123850638', 'Biotechnology: Academic Cell Update Edition', 'David P. Clark, Nanette J. Pazdernik', 'Spring 2015', 'ENGR 4600', 1, 'Jennifer R. Louten', 2933, 'Required', 25, 24, 0, 0, '69.45', '43.00', '0.00', '27.21', 'Approaches modern biotechnolgy from a molecular basis, in the most current and relevant journal articles'),
(982, '978-0132492676', 'A Gift of Fire: Social, Legal, and Ethical Issues for Computing Technology 4th Edition', 'Baase; Sara', 'Spring 2015', 'CSE 3642', 2, 'Manijeh Chavoshi', 3068, 'Required', 46, 20, 25, 999999, '93.57', '85.89', '28.19', '66.99', 'A Gift of Fire: Social, Legal, and Ethical Issues for Computing Technology, 4e  is ideal for courses in Computer Ethics and Computers and Society. It is also a useful reference for computer science professionals or anyone interested in learning more about computing technology and its overarching impact. Sara Baase explores the social, legal, philosophical, ethical, political, constitutional, and economic implications of computing and the controversies they raise. With a computer scientist\'s perspective, and with historical context for many issues, she covers the issues students will face both as members of a technological society and as professionals in computer-related fields. A primary goal is to develop computer professionals who understand the implications of what they create and how it fits into society at large.'),
(983, '978-0132662253', 'Modern Database Management', 'Jeffery A. Hoffer', 'Spring 2015', 'CS 3153', 3, 'Kai Qian', 3521, 'Required', 50, 50, 49, 999999, '189.79', '159.95', '59.49', '143.99', 'Focusing on what leading database practitioners say are the most important aspects to database development, Modern Database Management presents sound pedagogy and includes topics that are critical for the practical success of database professionals.'),
(984, '978-0132856201', 'Computer Networking', 'KUROSE', 'Spring 2015', 'CS 4263', 1, 'Jung E', 3088, 'Required', 1, 1, 34, 999999, '152.80', '114.60', '114.60', '114.60', 'No description available.'),
(985, '978-0132911276', 'ENGR.MECH.:DYNAMICS', 'HIBBELER', 'Spring 2015', 'ENGR 3122', 1, 'Lowder M', 2549, 'Required', 1, 1, 75, 999999, '206.80', '155.10', '155.10', '155.10', 'No description available.'),
(986, '978-0133773927', 'Computer Security: Principles and Practice', 'William Stallings, Lawrie Brown', 'Summer 2015', 'IT 4823', 1, 'Bob Brown', 5211, 'Required', 50, 50, 50, 0, '133.62', '76.19', '43.55', '0.00', 'Computer Security: Principles and Practice, Third Edition, is ideal for courses in Computer/Network Security. It also provides a solid, up-to-date reference or self-study tutorial for system engineers, programmers, system managers, network managers, product marketing personnel, system support specialists.'),
(987, '978-0133813463', 'Intro to Java Programming, Comp Version\nPlus MyProgrammmingLab with Pearson eText- Access Card Package ', 'Y.Daniel Liang ', 'Spring 2015', 'CS 2301', 2, 'INMAN', 13410, 'Required', 7, 7, 7, 999999, '192.50', '125.00', '17.99', '57.20', 'No description available.'),
(988, '978-0136088394', 'Modern Database Management', 'Jefferey A. Hoffer, Ramesh Venkataraman, & Heikki Topi', 'Spring 2015', 'CSE 3153', 2, 'Kai Qian', 3520, 'Recommended', 9, 30, 0, 0, '94.78', '25.98', '0.00', '0.00', 'Provides the latest information in database development.'),
(989, '978-0205734610', 'The Enjoyment of theatre', 'Jim A. Patterson, Patti P. Gillespie, Jim hunter, Kenneth Cameron', 'Spring 2015', 'ARTS 2002', 1, 'Charlotte Stephenson', 2415, 'Required', 12, 42, 0, 0, '40.00', '4.50', '0.00', '0.00', 'Brings theatre to life for readers by showing the relationship and relevance of the performing arts to everyday lives'),
(990, '978-0300161632', 'Encounters: Chinese Language and  \nCulture, Student Book 2', 'Cynthia Y. Ning', 'Spring 2015', 'CHNS 2001', 1, 'MENG', 10127, 'Required', 9, 9, 9, 999999, '221.25', '165.95', '87.00', '116.40', 'No description available.'),
(991, '978-0312597139', 'The Bedford Anthology of American Literature, Shorter Edition: Beginnings to the Present', 'Susan Belasco, Linck Johnson', 'Spring 2015', 'ENGL 2130', 1, 'Phillip M. Harrold (P)', 3398, 'Required', 48, 50, 50, 0, '77.62', '32.62', '17.98', '0.00', 'Here at last is an anthology that is not simply a collection of texts, but a carefully crafted tool for teaching and learning. This concise, single-volume, edition includes all the features of the longer volumes, but with a manageable amount of literature that can be covered in a single semester comprehensive survey course. With engaging author and selection introductions and generous gloss notes, The Bedford Anthology of American Literature, Shorter Edition, helps students read, appreciate, and understand American literature. The unsurpassed illustration program helps students grasp the cultural, material, and social conditions in which literary works are produced. Several innovative features supply additional contexts for the literature, while others help students reflect on why American literature is relevant and worth reading today.'),
(992, '978-0312602673', 'Listen 7e paper & 6-CD Set', 'Joseph Kerman and Gary tomlinson', 'Spring 2015', 'CS 4263', 3, 'John F. Stanislawski', 2417, 'Required', 21, 29, 75, 999999, '130.50', '97.90', '97.90', '97.90', 'Includes the highest quality recordings to introduce students to the art of focused listening. Also includes text material to go with CD\'s'),
(993, '978-0321267160', 'C# Software Solutions', 'Lewis; John', 'Spring 2015', 'CSE 1302 C', 1, 'Richard Gesick', 3274, 'Recommended', 32, 19, 27, 999999, '89.92', '27.94', '25.60', '11.66', 'Lewis provides the most up-to-date introduction to the C# programming language.  Takes an object oriented approach by covering C# for a beginning programmer. It provides both text-based and GUI-based examples to demonstrate computing concepts. It uses UML: Unified Modeling Language throughout to illustrate program designs. MARKET: For readers who want to learn how to program using the C# language.'),
(994, '978-0321707338', 'Principles of Biochemistry 5th Edition', 'Moran; Laurence A', 'Spring 2015', 'BIOC 3111K', 1, 'Tsai-Tien Tseng ', 2534, 'Required', 20, 16, 21, 999999, '221.25', '165.95', '87.00', '116.40', 'Principles of Biochemistry provides a concise introduction to fundamental concepts of biochemistry, striking the right balance of rigor and detail between the encyclopedic volumes and the cursory overview texts available today. Widely praised for accuracy, currency, and clarity of exposition, the Fifth Edition offers a new student-friendly design, an enhanced visual program, new Application Boxes, contemporary research integrated throughout, and updated end-of-chapter problems.'),
(995, '978-0321732330', 'Concepts of Genetics Plus Mastering Genetics with etext ', 'William S. Klug, Micheal R. Cumming, Charlotte A. Spencer, and micheal A. Palladino', 'Spring 2015', 'BIOL 3000', 1, 'Micheal B. Beach', 2922, 'Required', 29, 32, 61, 0, '172.71', '32.80', '18.79', '70.56', 'Known for its focus on teaching core concepts and problem-solving pertainign to genetics'),
(996, '978-0415892940', 'Reading for Diversity and Social Justice ', 'Adams, Maurianne', 'Spring 2015', 'EDUC 2120', 1, 'BATES', 13442, 'Required', 8, 8, 8, 999999, '258.45', '193.85', '122.08', '91.99', 'No description available.'),
(997, '978-0465085736', 'Linked', 'BARBASI', 'Spring 2015', 'STS 2400', 2, 'LEFEBVRE', 2942, 'Required', 1, 1, 62, 999999, '16.00', '12.00', '12.00', '12.00', 'No description available.'),
(998, '978-0470520338', 'Environmental Science 8th Edition', 'Botkin and Keller', 'Spring 2015', 'ENVS 2202K', 1, 'Daniel R. Ferreira', 2550, 'Required', 20, 20, 25, 999998, '192.50', '125.00', '17.99', '57.20', 'Environmental Science: Earth as a Living Planet, Eighth Edition provides emphasis on the scientific process throughout the book gives readers the structure to develop their critical thinking skills. Updated and revised to include the latest research in the field, the eighth edition continues to present a balanced analytical and interdisciplinary approach to the field. New streamlined text clears away the \"jargon\" to bring the issues and the science to the forefront. The new design and updated image program highlights key points and makes the book easier to navigate'),
(999, '978-0547125329', 'Chemistry', 'Steven S. Zumdahl, Susan A. Zumdahl', 'Spring 2015', 'CHEM 1212', 1, 'Rajnish Singh', 3040, 'Required', 50, 50, 50, 999999, '271.45', '361.90', '22.99', '272.49', 'CHEMISTRY outlines chemistry basics using a thoughtful approach built on problem solving. The book speaks directly to the reader about how to approach and solve chemical problems to learn to think like a chemist so that they can apply the process of problem-solving to all aspects of their lives. '),
(1000, '978-0547152813', 'General, Organic, and Biological Chemistry ', 'H. Stephen Stoker', 'Spring 2015', 'CHEM 1151', 1, 'HENRICKS', 12027, 'Required', 3, 3, 3, 999999, '116.81', '54.03', '22.50', '103.96', 'No description available.'),
(1001, '978-0618761258', 'Economics, Seventh Edition', 'William Boyes and Micheal Melvin', 'Spring 2015', 'ECON 1101', 1, 'Zepnep Arzu Kelani', 2313, 'Recommended', 24, 43, 57, 0, '68.59', '14.88', '13.99', '92.45', 'accessible writting, strong pedagogy, and integration of global economic issues'),
(1002, '978-0618949922', 'Understandable Statistics 9th Edition', 'Brase; Corrinne Pellillo', 'Spring 2015', 'MATH 2260', 2, 'Joseph N Fadyn', 2099, 'Required', 50, 40, 60, 999999, '258.45', '193.85', '122.08', '91.99', 'Understandable Statistics is a thorough, yet accessible program designed to help students overcome their apprehensions about statistics. The authors provide guidance and informal advice, while showing students the links between statistics and the world. To reinforce this approach, the book integrates real-life data from a variety of sources including journals, periodicals, newspapers, and the Internet. The Ninth Edition addresses the growing importance of developing students\' critical thinking and statistical literacy skills through the introduction of new features and exercises throughout the text. Extensive technology resources include a new algorithmic test bank and lecture slides, along with a market-leading DVD series and other resources designed to provide reinforcement for students and support for instructors. The use of graphing calculators, Excel, Minitab, and SPSS is covered though not required.'),
(1003, '978-0691017846', 'The Hero With a Thousand Faces', 'Joseph Campbell', 'Spring 2015', 'ENGL 1102', 4, 'Molly Brodak', 3374, 'Required', 50, 50, 0, 0, '14.00', '3.49', '0.00', '0.00', 'Joseph Campbell\'s classic cross-cultural study of the hero\'s journey has inspired millions and opened up new areas of research and exploration. Originally published in 1949, the book hit the New York Times best-seller list in 1988 when it became the subject of The Power of Myth, a PBS television special.\nThe first popular work to combine the spiritual and psychological insights of modern psychoanalysis with the archetypes of world mythology, the book creates a roadmap for navigating the frustrating path of contemporary life. Examining heroic myths in the light of modern psychology, it considers not only the patterns and stages of mythology but also its relevance to our lives today--and to the life of any person seeking a fully realized existence.\nMyth, according to Campbell, is the projection of a culture\'s dreams onto a large screen; Campbell\'s book, like Star Wars, the film it helped inspire, is an exploration of the big-picture moments from the stage that is our world. It is a must-have resource for both experienced students of mythology and the explorer just beginning to approach myth as a source of knowledge.'),
(1004, '978-0736095419', 'Physical Activity and Health', 'Bouchard,Claude', 'Spring 2015', 'ES 2100', 1, 'FEITO', 11564, 'Required', 4, 4, 4, 999999, '89.92', '27.94', '25.60', '11.66', 'No description available.'),
(1005, '978-0865165601', 'Latin for the New Millennium: Student \nText (Latin Edition) ', 'Milena MinKova', 'Spring 2015', 'LATN 1002', 1, 'TARVIN', 11097, 'Required', 3, 3, 3, 999999, '1.99', '1.99', '1.99', '1.99', 'No description available.'),
(1006, '978-0918091895', 'Pre Calculus', 'Paul Sisson', 'Spring 2015', 'MATH 1113', 1, 'Andrew McMorran', 2057, 'Required', 36, 77, 50, 0, '30.29', '82.28', '20.18', '0.00', 'Provides the latest tools for students to be able to comput math problems leading into calculus.'),
(1007, '978-1111343781', 'Exploring Art: A Global, Thematic Approach (with CourseMate Printed Access Card)', 'Margaret Lazzari, Dona Schlesier', 'Spring 2015', 'ARTS 2001', 1, 'Frederick A. Tookes', 2407, 'Required', 50, 50, 50, 999999, '166.54', '74.99', '39.87', '51.08', 'EXPLORING ART uses art examples from around the world to discuss art in the context of religion, politics, family structure, sexuality, entertainment and visual culture.'),
(1008, '978-1111837662', 'World History', 'William J. Duiker', 'Spring 2015', 'HIST 1111', 1, 'Roger Soiset', 2766, 'Required', 50, 50, 50, 999999, '182.45', '65.00', '18.99', '152.49', 'CENGAGE ADVANTAGE BOOKS: WORLD HISTORY offers the same engaging narrative of the full Seventh Edition at an affordable price'),
(1009, '978-1118164297', 'ENGINEERING FLUID MECHANICS', 'ELGER', 'Spring 2015', 'ENGR 3343', 1, 'Karim M', 2647, 'Required', 1, 1, 34, 999999, '249.95', '187.45', '187.45', '187.45', 'No description available.'),
(1010, '978-1118372203', 'ENGINEERING FLUID MECHANICS LOOSLEAF', 'ELGER', 'Spring 2015', 'ENGR 3343', 1, 'Karim M', 2647, 'Required', 1, 1, 26, 999999, '170.00', '127.50', '127.50', '127.50', 'No description available.'),
(1011, '978-1118566701', 'Accounting: Tools for Business Decision Making', 'Paul D. Kimmel, Jerry J. Weygandt, and Donald E. Kieso ', 'Spring 2015', 'ECON 2101', 1, 'Shannon Shumate', 2309, 'Required', 39, 113, 152, 0, '202.17', '19.91', '18.91', '70.88', 'Provides the basic tools and confidence for accountants to effectivley use them in making business decisions'),
(1012, '978-1121562875', 'MACHINE DYNAMICS & VIBRATIONS', 'VEAZIE', 'Spring 2015', 'ENGR 3125', 1, 'Veazie D', 3509, 'Required', 1, 1, 34, 999999, '104.00', '78.00', '78.00', '78.00', 'No description available.'),
(1013, '978-1133604372', 'American Government and Politics Today: The Essentials', 'Barbara Bardes, Mack Shelley, Steffen Schmidt', 'Spring 2015', 'POLS 1101', 1, 'Dr. Stacey Mitchell', 2794, 'Required', 50, 50, 50, 999999, '113.28', '58.12', '32.84', '93.99', 'AMERICAN GOVERNMENT AND POLITICS TODAY: THE ESSENTIALS, 2013-2014 EDITION inspires readers to join the exciting process of being active, informed citizens. Unbiased, concisely organized, and updated with Election 2012 coverage and a new focus on learning outcomes, the text\'s fundamental theme continues to be the importance of participating in active citizenship, emphasizing continual critical thinking about political issues, and encouraging readers to become involved in the political process. With a keen understanding of the needs and interests of today\'s learners, the authors incorporate interesting and relevant current examples to stimulate learning and excitement. The text is completely redesigned for even greater reader appeal.'),
(1014, '978-1133936794', 'McKeachie\'s Teaching Tips', 'Willbert McKeachie\nMarilla Svinicki', 'Spring 2015', 'GRAD 9001', 1, 'BUDDIE', 13741, 'Required', 5, 5, 5, 999999, '213.15', '159.85', '109.00', '175.40', 'No description available.'),
(1015, '978-1284045314', 'Java Illuminated 4th Edition', 'Anderson; Julie', 'Spring 2015', 'CSE 1302 C', 1, 'Richard Gesick', 3274, 'Recommended', 30, 10, 15, 999999, '143.64', '74.86', '57.75', '123.16', 'Each new print copy includes Navigate 2 Advantage Access that unlocks a comprehensive and interactive eBook, student practice activities and assessments, a full suite of instructor resources, and learning analytics reporting tools. Navigate 2 is nearly here. In the meantime, we invite you to redeem your Access Code and join our Lounge. Once your Navigate 2 Advantage Access is live, we will notify you via email. Fully revised and updated to reflect the most recent features in Java 7 and Java 8, Java Illuminated, Fourth Edition is one of the most interactive and user-friendly texts available. Comprehensive but accessible, the text takes a progressive approach to object-oriented programming, allowing students to build on established skills to develop new and increasingly complex classes. Java Illuminated follows an activity-based active learning approach that ensures student engagement and interest. This Fourth Edition now includes techniques for producing graphical output and animations using both applets and graphical applications. Packed with real-world applications and student activities, Java Illuminated, Fourth Edition, will draw students in to the world of programming. Key Features Include: • Supports recent features in Java 7 and Java 8, using switch with Strings (Example 5.14) and varargs (Examples 8.24–8.25) • Includes the addition of UML to many examples to better illustrate the architecture of the applications and the relationships between classes • Stronger coverage of interfaces and how they can be used to promote reusability of code • An expanded discussion of the Model-View-Controller architecture to better support students who are continuing on to more advanced programming courses, web programming, or mobile computing (for iPhone™ or Android™) • Chapter-by-chapter Programming Activities provide students with immediate visual feedback assessing the correctness of their code and give students the tools to fully understand and implement both basic and sophisticated techniques • Common Error Trap boxes warn against typical student errors • Look it Up programming projects promote independent student research Instructor and Student Support Materials: Every new, printed copy is packaged with a full suite of ancillary resources, including Navigate 2 Advantage Access that benefits BOTH the student and the Instructor! For the Instructor: • Lecture Slides in PowerPoint format • Solutions to Exercises • Test Bank For the Student: • Every NEW copy includes a free access card for Turing’s Craft CodeLab With Navigate 2, technology and content combine to expand the reach of your classroom. Whether you teach an online, hybrid, or traditional classroom-based course, Navigate 2 delivers unbeatable value. Experience Navigate 2 today at www.jblnavigate.com/2'),
(1016, '978-1442213531', 'Human Journey ', 'Kevin Relly ', 'Spring 2015', 'HIST 1110', 1, 'DOVER', 10328, 'Required', 6, 6, 6, 999999, '93.57', '85.89', '28.19', '66.99', 'No description available.'),
(1017, '978-1449649005', 'Nursing Ethics ', 'Janie B. Butts\nKaren L. Rich ', 'Spring 2015', 'NURS 3302', 1, 'PAYNE', 10256, 'Required', 5, 5, 5, 999999, '143.64', '74.86', '57.75', '123.16', 'No description available.'),
(1018, '978-1449691998', 'Essentials of Software Engineering 3rd Edition', 'Tsui; Frank', 'Spring 2015', 'SWE 2313', 2, 'Jonathan Lartigue', 3092, 'Required', 20, 15, 15, 999997, '116.81', '54.03', '22.50', '103.96', 'Updated with new case studies and content, the fully revised Third Edition of Essentials of Software Engineering offers a comprehensive, accessible, and concise introduction to core topics and methodologies of software development. Designed for undergraduate students in introductory courses, the text covers all essential topics emphasized by the IEEE Computer Society-sponsored Software Engineering Body of Knowledge (SWEBOK). In-depth coverage of key issues, combined with a strong focus on software quality, makes Essentials of Software Engineering, Third Edition the perfect text for students entering the fast-growing and lucrative field of software development. The text includes thorough overviews of programming concepts, system analysis and design, principles of software engineering, development and support processes, methodologies, and product management. The revised and updated Third Edition includes all-new sections on SCRUM and HTML-Script-SQL Design Examples, as well as expanded discussions of User-Interface Design, Flow of Interactions, Cognitive Models, and other UI Design issues. Covering all phases of the software production lifecycle and emphasizing quality throughout, Essentials of Software Engineering is a superb resource for students of software engineering. Key Features: • Revised and fully updated throughout, with all-new sections on SCRUM and HTML-Script-SQL Design Examples, as well as expanded discussions of other central topics • Provides coverage of all essential topics emphasized by SWEBOK • Covers essential topics required for students to complete individual and team projects in an affordable and accessible paperback format. • Contains an all-new Appendix with examples of Essential Software Development Plan (SDP), Essential Software Requirements Specifications (SRS), Essential Software Design, and Essential Test Plan • Accompanied by a full suite of instructor support material, including answers to the end-of-chapter questions, PowerPoint Lecture Outlines, and a complete Test Bank'),
(1019, '978-1457666766', 'Writer\'s Reference ', 'Hacker, Diana, \nSommers, Nancy', 'Spring 2015', 'ENGL 0099', 2, 'EYBELMAN', 11435, 'Required', 6, 6, 6, 999999, '160.00', '120.00', '82.00', '131.80', 'No description available.'),
(1020, '978-1605769745', 'Vistas, 4th Edition, Supersite Plus Code (supersite & WebSAM & vtext) - Code Only', 'vhl', 'Spring 2015', 'CSE 1001', 1, 'Wierra M. Flores', 2831, 'Required', 11, 5, 0, 0, '91.35', '98.70', '0.00', '0.00', 'Supersite Plus Code (Supersite and WebSAM and vText) Get access to the program Supersite, the WebSAM, which is the online version of the workbook(s) and the vText, which is the online version of the textbook with one code. '),
(1021, '978-1607974147', 'Fundamentals of Computer Systems', 'Dan C. Lo, Kai Qian', 'Summer 2015', 'CS 3224', 1, 'Dan C. Lo', 5277, 'Required', 50, 48, 50, 0, '68.57', '51.55', '0.00', '0.00', 'Fundamentals of Computer Science contains the essnetials required to understand Computer Organization and Architecture'),
(1022, '978-9544007737', 'Fundamentals of Computer Programming with C#', 'Nakov; Svetlin ', 'Spring 2015', 'CSE 1302 C', 1, 'Richard Gesick', 3274, 'Required', -1, 0, 34, 999999, '1.99', '1.99', '1.99', '1.99', 'The free book \"Fundamentals of Computer Programming with C#\" (download it from http://www.introprogramming.info for free) is a comprehensive computer programming tutorial that teaches programming, logical thinking, data structures and algorithms, problem solving and high quality code with lots of examples in C#. It comes with free video lessons, presentations, exercises and solutions. This free programming tutorial starts with the first steps in programming and software development like variables, data types, conditional statements, loops and arrays and continues with other basic topics like methods, numeral systems, strings and string processing, exceptions, classes and objects.This free programming tutorial starts with the first steps in programming and software development like variables, data types, conditional statements, loops and arrays and continues with other basic topics like methods, numeral systems, strings and string processing, exceptions, classes and objects.');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(55) NOT NULL,
  `user_id` int(55) NOT NULL,
  `book_id` int(55) NOT NULL,
  `count` int(55) NOT NULL,
  `type` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(55) NOT NULL,
  `user_id` int(55) NOT NULL,
  `shipping_billing_same` tinyint(1) NOT NULL,
  `shipping_address_1` text NOT NULL,
  `shipping_address_2` text NOT NULL,
  `shipping_city` text NOT NULL,
  `shipping_state` text NOT NULL,
  `shipping_country` text NOT NULL,
  `shipping_zip` int(55) NOT NULL,
  `billing_address_1` text NOT NULL,
  `billing_address_2` text NOT NULL,
  `billing_city` text NOT NULL,
  `billing_state` text NOT NULL,
  `billing_country` text NOT NULL,
  `billing_zip` int(55) NOT NULL,
  `card_used` tinyint(1) NOT NULL,
  `card_type` enum('Amex','Visa','MasterCard','etc') NOT NULL,
  `card_number` int(55) NOT NULL,
  `card_cvv` int(55) NOT NULL,
  `card_name` text NOT NULL,
  `card_exp_date` text NOT NULL,
  `phone` int(55) NOT NULL,
  `email` text NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(55) NOT NULL,
  `order_id` int(55) NOT NULL,
  `book_id` int(55) NOT NULL,
  `user_id` int(55) NOT NULL,
  `quantity` int(55) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `permissions` enum('admin','developer','user','restricted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `permissions`) VALUES
(1, 'dmcfall1@students.kennesaw.edu', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'David', 'McFall', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1042;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
