<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio-Website</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/feather-icons"> --}}

    {{-- Add the lines in the layout file --}}
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/styleprog.css">
    <link rel="stylesheet" href="style/timeline.css">
    <link rel="stylesheet" href="responsive/responsive.css">
    {{-- <link rel="stylesheet" href="modals/modals.css"> --}}
    <link rel="stylesheet" href="contact/contact.css">
    <link rel="stylesheet" href="style/slideshow.css">
    {{-- <link rel="stylesheet" href="style/modal.css"> --}}
  </head>
  <body>
    <!-- header site -->
    <nav class="navba">
      <h1>
        <a href="#" id="" class="navba-logo">David <span>Vincent</span>.</a>
      </h1>
      <div class="navba-nav">
        <a href="#home" id="hero-btn">Home</a>
        <a href="#about" id="about-btn">About</a>
        <a href="#resume" id="resume-btn">Resume</a>
        <a href="#service" id="service-btn">Portofolio</a>
        <a href="#skills" id="skills-btn">Certification</a>
        <a href="#contact" id="contact-btn">Contact</a>
      </div>

      <div class="navba-extra"> 
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- ------------------------------------------------------------------ -->
    <!-- <hr /> -->
    <!-- </center> -->

    <!-- navbar-end -->
    <!-- ----------Hero-section start--------- -->

   <!-- Login Modal -->
    <section class="hero-section" id="home">
      <main class="content">
        <h1>David Vincent Gurning</h1>
        <p>code -verslaafde ,<span class="typing"></span></p>
        <!-- <hr> -->
        <a type="button" class="btn btn-dark " href="{{route('login') }}" id="loginbutton" style="margin-bottom: 20px">
          LogIn as admin !
        </a> 
        {{-- <button type="button" class="btn btn-primary inibuttonya" data-toggle="modal" data-target="#myModal-new" style="display: none; margin-top: 20px;" >
          Add Portofolio
        </button>  --}}

        <div class="media-icons">
          <div class="media-icons-1">
            <a href="https://www.instagram.com/davidvincen_/"><i class="bx bxl-instagram"></i></a>
          </div>
          <div class="media-icons-1">
            <a href="https://www.linkedin.com/in/david-vincent-gurning-10307b233?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="bx bxl-linkedin"></i></a>
          </div>
          <div class="media-icons-1">
          <a
            href="https://open.spotify.com/user/31m22wavb2x6yr4j5oym5ae6ymvy?si=3666d214ce374c15"
            ><i class="bx bxl-spotify"></i
          ></a>
          </div>
          <div class="media-icons-1">
            <a
              href="https://github.com/davidgurning"><i class='bx bxl-github'></i>
            </a>
          </div>
        </div>
      </main>
    </section>

    <!------------- Hero-section end ------------>

    <!----------------- About- start------------------->

    <section id="about" class="about">
      <div class="up">
        <h1 class="judul">About</h1>
        <h1 class="bayangan">About Me</h1>
        <p>
          "Welcome to the 'About' section, where you can discover more about me and my journey. <br>
          Explore this space to learn about my background, interests, and experiences that <br>
          shape who I am today."
        </p>
      </div>
      <div class="teks-skill">
        <div id="years-expereance" class="about-teks">
          <div class="photos">
            <img src="img/image2.png" />
          </div>
          <div class="data-1">
            <h2>David Vincent Gurning</h2>
            <p>
              Hi! you can call me David. I come from a small town called Ajibata
              in North Sumatra, Indonesia. I am a second-year Informatics
              student and currently undergoing 5th semester. I am very
              passionate about IT and programming, technology has become an
              integral part of me. I started blogging when I was 19 years old
              and got to know more about web development after that. I have a
              leadership spirit, love to learn new things, creative, humorous,
              and ready to accept challenges. With the experiences that I've
              gone through, it makes me more interested in participating in IT
              activities around me. For me, there is no reason to stop creating
              other new experiences in the future.
            </p>
            <a target="_blank" href="cv/cv.pdf" style="margin-left:200px" class="btn btn-primary"><button type="button" class="btn btn-info">Dwonload My CV !</button></a>
          </div>
        </div>
      </div>
    </section>


    <!------------- about-section end ------------>

    <!----------------- service- start------------------->
    


    <!-- Modal -->
    
    <div class="modal fade" id="myModal-new" data-backdrop="static" data-keyboard="false" style="margin-top: 100px">
      <div class="modal-dialog">
        <div class="modal-content">
          {{-- Modal header --}}
          <div class="modal-header">
            <h4 class="modal-title text-dark" >Tambah Portofolio</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          {{-- Modal body (form content) --}}
          <div class="modal-body">
            <form id="myForm" action="/portofolio" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="judul" class="text-dark">judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
                @error('judul')
                  <div class="alert alert-danger"{{$message}}></div>
                @enderror

                <label for="gambar" class="text-dark">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                @error('gambar')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="pesan" class="text-dark">Pesan</label>
                <input type="text" class="form-control" id="pesan" name="pesan">
                @error('pesan')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror

                
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section id="service" class="service">
      {{-- <button type="button" class="btn btn-primary inibuttonya" data-toggle="modal" data-target="#myModal-new">
        Add Portofolio
      </button>   --}}
      <!-- Modal -->
      <div class="up">
        <h1 class="judul">Portofolio</h1>
        <h1 class="bayangan">Portofolio</h1>
        <p id="project">
          "Explore my portfolio to see a collection of my work and projects. <br>
          From web development to design, this section showcases my creative <br>
          endeavors and accomplishments."
        </p>
      </div>
{{-- 
      <div class="btn-group d-flex justify-content-center" role="group" aria-label="Button group with nested dropdown">
        <button>
          <a href="#all" id="all" class="btn btn-custom mx-2 rounded fw-bold">
            <p>all</p>
        </a>
        </button>
        <button>
          <a href="#website" id="website-btn" class="btn btn-custom mx-2 rounded fw-bold">
            <p>Website</p>
        </a>
        </button>
        <button>
          <a href="#design" id="design-btn" class="btn btn-custom mx-2 rounded fw-bold">
            <p>Design</p>
        </a>
        </button>
        <button>
          <a href="#mobile" id="mobile-btn" class="btn btn-custom mx-2 rounded fw-bold">
            <p>Mobile</p>
        </a>
        </button>
      </div> --}}

      @foreach ($portofolio as $item)
      <div id="{{$item->jenisprestasi}}">
        <div class="pembungkus-website">
          <div class="judul-1">
            <h2>{{$item->judul}}</h2>
          </div>
          <div class="website">
            <div class="photos-service">
              <img src="{{ asset('portofolioImage/'.$item->gambar) }}" alt=""/>
            </div>
            <div class="teks-{{$item->jenisprestasi}}">
              <p>
                {{$item->pesan}}
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <div class="pembungkus-website">
        <div class="judul-1" id="website">
          <h2>Pengembangan Website</h2>
        </div>
        <div class="website">
          <div class="photos-service">
            <img src="img/design.png" />
          </div>
          <div class="teks-website">
            <p>
              I have created a website with the purpose of facilitating coffee orders. However, it's important to clarify that the website I have developed is currently limited to its front-end presentation. This means that the website primarily focuses on the user interface and user experience, without the full functionality of processing orders. The front-end of the website provides users with an attractive and user-friendly interface for browsing coffee options, customizing their orders, and adding items to a virtual cart, but the actual order processing and transaction handling are not yet integrated into the website's functionality.
            </p>
          </div>
        </div>
      </div>
    </section>

<!-- Resume -->
  <section id="resume" class="resume">
      <div class="up">
        <h1 class="judul">Resume</h1>
        <h1 class="bayangan">My Resume</h1>
        <p>
          "Feel free to peruse my resume to discover a detailed account of my <br> 
          educational and professional background, providing a comprehensive understanding <br>
          of my qualifications and career trajectory."
        </p>
      </div>
      <div class="container-satu">
        <main class="row-satu">
              <section class="col-satu">

                <header class="title-satu">
                  <h2>Expereince</h2>
                </header>
  
                <div class="contents-satu">
                  <div class="box-satu">
                    <h4>2022-2023</h4>
                    <h3>Arts and culture department</h3>
                    <p>member</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2022-present</h4>
                    <h3>student guitar choir</h3>
                    <p>member</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2022-2023</h4>
                    <h3>student leadership</h3>
                    <p>participant</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2022</h4>
                    <h3>code for the nation</h3>
                    <p>Participant</p>
                  </div>
                </div>
              </section>
              <!-------------------------------- experience section end ------------------------>

              <section class="col-satu">

                <header class="title-satu">
                  <h2>Education</h2>
                </header>
  
                <div class="contents-satu">
                  <div class="box-satu">
                    <h4>2021-present</h4>
                    <h3>INSTITUT TEKNOLOGI DEL</h3>
                    <p>Sitoluama, District. Balige, Toba, North Sumatra</p>
                    <p>informatics undergraduate program</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2018-2021</h4>
                    <h3>SMA NEGERI 1 PARAPAT</h3>
                    <p>Jl. Education No.59, Pardamean Ajibata, Kec. Ajibata, Toba, North Sumatra 21174</p>
                    <p>science major / MIA -1</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2015-2018</h4>
                    <h3>SMP NEGERI 1 PARAPAT</h3>
                    <p>Jl. Talun Sungkit No.12, Tiga Raja, Kec. Girsang Sipangan Bolon, Simalungun Regency, North Sumatra 21174</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2009-2015</h4>
                    <h3>SD NEGERI 094151 PARAPAT</h3>
                    <p>Jl. Development No.60, Parapat, Kec. Girsang Sipangan Bolon, Simalungun Regency, North Sumatra 21174</p>
                  </div>
  
                  <div class="box-satu">
                    <h4>2008-2009</h4>
                    <h3>TK KRISTEN YOBEL AJIBATA</h3>
                    <p>MW5P+RGH, Jl. D.I.Panjaitan II, Pardamean Ajibata, Kec. Ajibata, Toba, North Sumatra 21174</p>
                  </div>
                </div>
              </section>

        </main>
      </div>
      <div class="border-aja">

      </div>
      <br><br><br>
      <section class="section-tools">
        <h2>Tools</h2>   
        <div class="tools-container">
            <div class="tools-category">
                <h3>Programming Language</h3>
                
                <div class="skills-progress-1">
                    <div class="skil-progress">
                        <div class="skill-name-1">C</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="60%" style="max-width: 60%"></div>
                        </div>
                    </div>
                    
                    <div class="skill-progress">
                        <div class="skill-name-1">Java</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="60%" style="max-width: 60%"></div>
                        </div>
                    </div>
    
                    <div class="skill-progress">
                        <div class="skill-name-1">HTML</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="90%" style="max-width: 90%"></div>
                        </div>
                    </div>
    
                    <div class="skill-progress">
                        <div class="skill-name-1">CSS</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="80%" style="max-width: 80%"></div>
                        </div>
                    </div>
                    
                    <div class="skill-progress">
                        <div class="skill-name-1">Javascript</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="70%" style="max-width: 70%"></div>
                        </div>
                    </div>

                    <div class="skill-progress">
                        <div class="skill-name-1">MySQL</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="75%" style="max-width: 75%"></div>
                        </div>
                    </div>
    
                    <div class="skill-progress">
                        <div class="skill-name-1">SQL</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="75%" style="max-width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tools-category">
                <h3>Creative Design</h3>
                
                <div class="skills-progress-1">
                    <div class="skill">
                        <div class="skill-name-1">Adobe Photoshop</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="40%" style="max-width: 40%"></div>
                        </div>
                    </div>

                    <div class="skill-progress">
                        <div class="skill-name-1">Wondershare Filmora</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="20%" style="max-width: 20%"></div>
                        </div>
                    </div>
    
                    <div class="skill-progress">
                        <div class="skill-name-1">Figma</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="90%" style="max-width: 90%"></div>
                        </div>
                    </div>
    
                    <div class="skill-progress">
                        <div class="skill-name-1">Sketch Up</div>
                        <div class="skill-bar-1">
                            <div class="skill-per-1" per="70%" style="max-width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <div class="border-aja">

        </div>

          <section class="interest-area-1">
            <div class="interest-judul-1">
              <h2>soft-skill </h2>
            </div>
            <div class="interest-disp-1">
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-user-voice'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Public Speaking</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-brain'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Critical Thinking</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxl-sketch' ></i>
                </div>
                <div class="interest-top-1">
                  <h4>Decision-making</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-buildings' ></i>
                </div>
                <div class="interest-top-1">
                  <h4>Project Leader</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-help-circle'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Leading Team</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-cuboid'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Problem-solving</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxl-graphql'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Creativity</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-donate-heart'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Adaptability</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bx-street-view'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Teamwork</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bx-shape-circle'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Communication skills</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bxs-user-check'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Listening skills</h4>
                </div>
              </div>
              <div class="interest-part-1">
                <div class="interest-img-1">
                  <i class='bx bx-math'></i>
                </div>
                <div class="interest-top-1">
                  <h4>Programing Languages</h4>
                </div>
              </div>
            </div>
          </section>

    <section class="interest-area">
      <div class="interest-judul">
        <h2>areas of interest </h2>
      </div>
      <div class="interest-disp">
        <div class="interest-part">
          <div class="interest-img">
            <i class='bx bxl-sketch'></i>
          </div>
          <div class="interest-top">
            <h4>UI/UI Design</h4>
          </div>
        </div>
        <div class="interest-part">
          <div class="interest-img">
            <i class='bx bx-laptop'></i>
          </div>
          <div class="interest-top">
            <h4>Web Development</h4>
          </div>
        </div>
        <div class="interest-part">
          <div class="interest-img">
            <i class='bx bxs-face-mask'></i>
          </div>
          <div class="interest-top">
            <h4>Artificial Intelligence</h4>
          </div>
        </div>
        <div class="interest-part">
          <div class="interest-img">
            <i class='bx bx-math'></i>
          </div>
          <div class="interest-top">
            <h4>Programing Languages</h4>
          </div>
        </div>
      </div>
    </section>

   
    </div>
    </section>
  </section>

<!-- -------------------------------------------------------------------------- -->


    <section id="skills" class="skills">
      <div class="up">
        <h1 class="judul">Experience</h1>
        <h1 class="bayangan">My Experience</h1>
        <p id="certification">
          "Explore my work history and experiences to get a glimpse  <br>
           of my professional journey. This section showcases my past roles and contributions,<br>
          giving you a sense of my expertise and growth."
        </p>
      </div>

      <div class="modal fade" id="myModal-new1" data-backdrop="static" data-keyboard="false" style="margin-top: 100px">
        <div class="modal-dialog">
          <div class="modal-content">
            {{-- Modal header --}}
            <div class="modal-header">
              <h4 class="modal-title text-dark" >Tambah Sertifikat</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
  
            {{-- Modal body (form content) --}}
            <div class="modal-body">
              <form id="myForm" action="/sertifikat" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="jenissertifikat" class="text-dark">jenis Sertifikat</label>
                <select type="text" class="form-control" id="jenissertifikat" name="jenissertifikat">
                  <option value="website" class="text-dark">website</option>
                  <option value="design" class="text-dark">design</option>
                  <option value="mobile" class="text-dark">mobile</option>
                </select>
  
                  <label for="gambarsertifikat" class="text-dark">Gambar Sertifikat</label>
                  <input type="file" class="form-control" id="gambarsertifikat" name="gambarsertifikat">
                  @error('gambarsertifikat')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
  
                  <label for="judulsertifikat" class="text-dark">Judul Sertifikat</label>
                  <input type="text" class="form-control" id="judulsertifikat" name="judulsertifikat">
                  @error('pesan')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  
       @foreach ($serti as $item1)
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pembungkus-shs">
                    <div class="judul-1">
                        <h2>
                          I obtained this certificate when I was: {{$item1->jenissertifikat}}</h2>
                    </div>
                    <div class="shs row">
                        <div class="shs-2 col-md-6">
                            <h5>{{$item1->judulsertifikat}}</h5>
                            <div class="photos-service">
                                <img src="{{ asset('sertiImage/'.$item1->gambarsertifikat) }}" class="img-fluid" alt="Debate Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      @endforeach 

        <div class="row">
            <div class="col-md-12">
                <div class="pembungkus-collage">
                    <div class="judul-1">
                        <h2>One certificate that I obtained when I was followed code for the nation:</h2>
                    </div>
                    <div class="shs row">
                        <div class="shs-2 col-md-6">
                            <h5>Participant - Code for the nation <i class="ri-navigation-fill"></i></h5>
                            <div class="photos-service">
                                <img src="img/riset.jpg" class="img-fluid" alt="Code for the Nation Image">
                            </div>
                        </div>
                        <!-- Add similar code for other items -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="pembungkus-expertise">
                    <div class="judul-1">
                        <h2>One certificate that I obtained when I was followed a course:</h2>
                    </div>
                    <div class="shs row">
                        <div class="shs-2 col-md-6">
                            <h5>Dicoding <i class="ri-navigation-fill"></i></h5>
                            <div class="photos-service">
                                <img src="img/dicoding.jpg" class="img-fluid" alt="Dicoding Image">
                            </div>
                        </div>
                        <!-- Add similar code for other items -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="pembungkus-org">
                    <div class="judul-1">
                        <h2>Several certificates that I obtained when I was followed organization:</h2>
                    </div>
                    <div class="shs row">
                        <div class="shs-2 col-md-6">
                            <h5>Anggota - Paduan Gitar Mahasiswa</h5>
                            <div class="photos-service">
                                <img src="img/Pgm.png" class="img-fluid" alt="Paduan Gitar Mahasiswa Image">
                            </div>
                        </div>

                        <div class="shs-2 col-md-6">
                            <h5>Anggota - Departemen Seni dan Budaya</h5>
                            <div class="photos-service">
                                <img src="img/depsebn.png" class="img-fluid" alt="Departemen Seni dan Budaya Image">
                            </div>
                        </div>
                        <!-- Add similar code for other items -->
                    </div>
                </div>
            </div>
        </div>
    </div>    </section>

    <!-- --------------------------------------------- -->
      <section id="contact" class="contact">
        <div class="up">
          <h1 class="judul">Contact</h1>
          <h1 class="bayangan">Contact</h1>
          <p>
            "Get in touch with me easily through the contact section.Feel free <br>
            to reach out for inquiries, collaborations, or just to say hello. <br>
            I'm looking forward to hearing from you!"
          </p>
        </div>
        <h1>Contact Me</h1>
        <div class="all-fill">
          <div class="data-kiri">
            <div class="alamat-1">
              <div class="font-location">
                <i class='bx bx-current-location'></i>
              </div>
              <div class="data-isi">
                <h3>Address</h3>
                <p>Ajibata, Toba Regency, North Sumatra 21174</p>
              </div>
            </div>
            <div class="alamat-1">
              <div class="font-email">
                <i class='bx bxs-envelope' ></i>
              </div>
              <div class="data-isi">
                <h3>Email</h3>
                <p class="email-david">davidgurning4@gmail.com</p>
              </div>
            </div>
            <div class="alamat-1">
              <div class="font-network">
                <i class='bx bx-network-chart'></i>
              </div>
              <div class="data-isi">
                <h3>Social Profiles</h3>
                <div class="media-david">
                  <a href="https://www.instagram.com/davidvincen_/
                  "><i class='bx bxl-instagram-alt'></i></a>
                  <a href="https://github.com/davidgurning"><i class='bx bxl-github'></i></a>
                  <a href="https://www.youtube.com/channel/UCxQmiXyQS9PTfHHU0ertXcA"><i class='bx bxl-youtube'></i></a>
                  <a href="https://www.linkedin.com/in/david-vincent-gurning-10307b233?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class='bx bxl-linkedin-square'></i></a>
                </div>
              </div>
            </div>
            <div class="alamat-1">
              <div class="font-phone">
                <i class='bx bxs-phone'></i>
              </div>
              <div class="data-isi">
                <h3>Phone Number</h3>
                <p class="number-david">+62 821-6408-4465</p>
              </div>
            </div>
          </div>
          <form action="" class="text-white">
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" id="name" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label"> Your Email</label>
              <input type="email" id="email" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label"> Your Subject</label>
              <input type="text" id="subject" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label"> Your Message</label>
              <textarea
                id="message"
                name="message"
                cols="30"
                rows="10"
                class="form-control"
              ></textarea>
            </div>
            <div class="text-center">
              <button
                type="submitBtn"
                id="submitBtn"
                class="btn btn-primary btn-lg"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </section>
      
    <!----------------- About -End ------------------->

    {{-- <script src="../assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="js/script.js"></script> 
    <script src="js/slideshow.js"></script>

    <script src="js/jquery.js"></script>
    <script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

    
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!-- Menggunakan jQuery dari CDN -->
  </body>
</html>
