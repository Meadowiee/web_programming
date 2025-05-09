<?php 
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != 'OK') {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A08RTbNQ8dL+zNTIr58aEQZ1+IDgfzGZCkS1Jr74ELT+ro0IeGizqPLForn7M" crossorigin="anonymous"></script>
    <title>Login page</title>
</head>
<body>
    <!-- Header Section -->
    <div id="header">
      <img src="images/notion.jpg" height="80px" />
      <h1>Shafina Ardelia</h1>
      <h3>2311016120010</h3>
    </div>

    <!-- Menu Section -->
    <div id="menu">
        <div class="justify-content-between">
            <div class="justify-content-start">
                <div class="menu-item">
                  <img src="images/home.jpg" class="icon" height="60px" />
                  <a href="member.php">Home</a>
                </div>
                <div class="menu-item">
                  <img src="images/comment.jpg" class="icon" height="60px" />
                  <a href="member.php">Data</a>
                </div>
                <div class="menu-item">
                  <img src="images/form.jpg" class="icon" height="60px" />
                  <a href="member.php">Form</a>
                </div>
            </div>
            <div class="justify-content-end">
                <a href="logout.php" class="custom-button">Logout</a>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div id="content">
      <div id="about">
        <div class="about-text">
          <p>Hello, <?=$_SESSION['username']?>!</p>
          <h2>I am a Computer Science Student</h2>
          <p class="university">at Universitas Lambung Mangkurat</p>
          <p class="description">
            A deep thinker who enjoys exploring multifaceted issues. I am driven
            by my curiosity that leads me to solving complex problems and
            learning many different things. Currently, I am dedicated to
            continuous personal growth, striving to improve myself each day and
            make a positive contribution to society.
          </p>
        </div>
        <div class="about-images">
          <img src="images/shafina.jpg" height="250px">
        </div>
      </div>

      <div id="education">
        <div class="title">
          <img src="images/education.jpg" height="60px" />
          <h2>Education</h2>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Universitas Lambung Mangkurat</h3>
            <p>S.Kom, Computer Science Degree</p>
          </div>
          <div class="end">
            <h3>Banjarbaru, Indonesia</h3>
            <p>Expected June 2027</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>SMA Negeri 1 Martapura</h3>
            <p>Graduated with Honor, Mathematics and Natural Sciences</p>
          </div>
          <div class="end">
            <h3>Martapura, Indonesia</h3>
            <p>June 2023</p>
          </div>
        </div>
      </div>

      <div id="award">
        <div class="title">
          <img src="images/award.jpg" height="60px" />
          <h2>Selected Grant and Honor</h2>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Participant of Pemilihan Mahasiswa Berprestasi 2025</h3>
            <p>Faculty of Mathematics and Natural Sciences, ULM</p>
          </div>
          <div class="end">
            <h3>Banjarbaru, Indonesia</h3>
            <p>2025</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Finalist of Poster Digital Competition</h3>
            <p>Universitas Airlangga</p>
          </div>
          <div class="end">
            <h3>Surabaya, Indonesia</h3>
            <p>2024</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>
              Finalist in Speech Competition, “Wawasan Kebangsaan dan Bela
              Negara”
            </h3>
            <p>MKKS Kalimantan Selatan</p>
          </div>
          <div class="end">
            <h3>Banjarmasin, Indonesia</h3>
            <p>2022</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>4th Place in Regional Physics Olympiad</h3>
            <p>Pusat Prestasi Nasional</p>
          </div>
          <div class="end">
            <h3>Banjarmasin, Indonesia</h3>
            <p>2022</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>1st Place in Regional Astronomy Olympiad</h3>
            <p>Pusat Prestasi Nasional</p>
          </div>
          <div class="end">
            <h3>Banjarmasin, Indonesia</h3>
            <p>2021</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Finalist of National Mathematics Olympiad</h3>
            <p>Faculty of Mathematics and Natural Science, ULM</p>
          </div>
          <div class="end">
            <h3>Banjarbaru</h3>
            <p>2020</p>
          </div>
        </div>
      </div>

      <div id="experience">
        <div class="title">
          <img src="images/work.jpg" height="60px" />
          <h2>Work Experience</h2>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Junior Software Developer | Ruang Algo Multimatics</h3>
            <ul>
              <li>Developed and implemented two features for a project</li>
              <li>
                Assisted in testing and debugging to ensure functionality and
                performance
              </li>
              <li>
                Actively colaborated with system analysts, senior developers,
                and database analysts to optimize project development and
                deployment
              </li>
            </ul>
          </div>
          <div class="end">
            <p>December 2024 - Present</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Lecture Assistant - Basic Programming</h3>
            <ul>
              <li>
                Assisted students in understanding fundamental programming
                concepts
              </li>
              <li>Provided guidance on debugging and problem-solving</li>
              <li>
                Supported the lecture in preparing and grading assignments
              </li>
            </ul>
          </div>
          <div class="end">
            <p>September 2024 - December 2024</p>
          </div>
        </div>
        <div class="section-item">
          <div class="start">
            <h3>Private Tutor</h3>
            <ul>
              <li>
                Coached middler scholar and high school student in Mathematics, Physics, Chemistry,
                and Biology to give a solid understanding as a secondary study
                session
              </li>
              <li>
                Coached fresh graduate student in computational
                thinking and guide the preparation for CPNS exam
              </li>
            </ul>
          </div>
          <div class="end">
            <p>September 2023 - November 2024</p>
          </div>
        </div>
      </div>

       <div id="organization">
        <div class="title">
            <img src="images/hierarchy.jpg" height="60px">
            <h2>Organization Experience</h2>
        </div>
        <div class="section-item">
            <div class="start">
                <h3>Anggota, Komisi III Bidang Aspirasi dan Hubungan Masyarakat</h3>
                <p>Dewan Pengawasan Mahasiswa FMIPA ULM</p>
            </div>
            <div class="end">
                <h3>Banjarbaru, Indonesia</h3>
                <p>February 2025 - Present</p>
            </div>
        </div>
        <div class="section-item">
            <div class="start">
                <h3>Anggota, Badan Pengawas Pemilihan Raya</h3>
                <p>Panitia Pemilihan Raya FMIPA ULM</p>
            </div>
            <div class="end">
                <h3>Banjarbaru, Indonesia</h3>
                <p>October 2024 - February 2025</p>
            </div>
        </div>
        <div class="section-item">
            <div class="start">
                <h3>Anggota, Divisi Pengembangan Teknologi Informasi</h3>
                <p>Himpunan Mahasiswa Ilmu Komputer FMIPA ULM</p>
            </div>
            <div class="end">
                <h3>Banjarbaru, Indonesia</h3>
                <p>November 2024 - December 2024</p>
            </div>
        </div>
       </div>

       <div id="technical-skill">
        <div class="title">
            <img src="images/code.jpg" height="60px">
            <h2>Technical Skill</h2>
        </div>
        <div class="section-item">
            <h3 class="start">Backend Systems</h3>
            <p class="end">MySQL, PostgreSQL, Sequelize, Loopback, Node.js</p>
        </div>
        <div class="section-item">
            <h3 class="start">Programming Languages</h3>
            <p class="end">Java, Python, Javascript, Typescript</p>
        </div>
        <div class="section-item">
            <h3 class="start">Web Frameworks</h3>
            <p class="end">Nuxt, Vue, Bootstrap, Tailwind</p>
        </div>
        <div class="section-item">
            <h3 class="start">UI UX Design</h3>
            <p class="end">Figma, Canva</p>
        </div>
       </div>

       <div id="language">
        <div class="title">
            <img src="images/english.png" height="35px">
            <h2>Languages</h2>
        </div>
        <div class="section-item">
            <h3 class="start">Indonesian</h3>
            <p class="end">Native</p>
        </div>
        <div class="section-item">
            <h3 class="start">English</h3>
            <p class="end">Intermediate - B2</p>
        </div>
       </div>

       <div id="contact">
        <div class="title">
            <img src="images/phone.jpg" height="60px">
            <h2>Contact</h2>
        </div>
        <div class="section-item">
            <h3 class="start">Personal Website</h3>
            <p class="end"><a href="https://www.linkedin.com/in/shafina-ardelia/">www.linkedin.com/in/shafina-ardelia/</a></p>
        </div>
        <div class="section-item">
            <h3 class="start">Campus Email Address</h3>
            <p class="end">2311016120010@mhs.ulm.ac.id</p>
        </div>
        <div class="section-item">
            <h3 class="start">Gmail Address</h3>
            <p class="end">shafinaardelia0@gmail.com</p>
        </div>
        <div class="section-item">
            <h3 class="start">Phone Number</h3>
            <p class="end">+62-813-5291-5545</p>
        </div>
       </div>
    </div>
</body>
</html>

<!-- Cookies simpan di client -->
<!-- Session simpan di server -->

<!-- Ada 3 fungsi untuk kelola session -->
<!-- session_start(), session_unsent(), session_destroy() -->
<!-- $_SESSSION['heilo'] -->