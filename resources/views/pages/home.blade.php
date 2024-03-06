@extends('layout.app')
@section('content')

            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div id="keyLine" class="text-uppercase"></div></div>
                                <div class="fs-3 fw-light text-muted" id="shortTitle"></div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline" id="title"></span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('resume.Page') }}">Resume</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('project.Page') }}">Projects</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile">
                                    <img class="profile-img" id="heroImage" src="" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4" id="aboutTitle"></p>
                                <p class="text-muted" id="aboutdescription"></p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" target="_blank" id="twitterLink" href=""><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" target="_blank" id="linkedInLink" href=""><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" target="_blank" id="githubLink" href=""><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <script>
            getHero()
            async function getHero(){
                try{
                    const url = "/heroRequest";
                    const response = await axios.get(url);
                    // javascript here
                    document.getElementById('keyLine').innerHTML = response.data['keyline'];
                    document.getElementById('shortTitle').innerHTML = response.data['shortTitle'];
                    document.getElementById('title').innerHTML = response.data['title'];
                    document.getElementById('heroImage').src = response.data['img'];
                }catch(error){
                    alert(error);
                }
            }

            getAbout();
            async function getAbout(){
                const url = "/aboutRequest";
                const response = await axios.get(url);
                document.getElementById('aboutTitle').innerHTML = response.data['title'];
                document.getElementById('aboutdescription').innerHTML = response.data['description'];
            }

            getSocial();
            async function getSocial(){
                const url = '/socialRequest';
                const response = await axios.get(url);
                document.getElementById('twitterLink').href = response.data['twitter_link'];
                document.getElementById('linkedInLink').href = response.data['linkedIn_link'];
                document.getElementById('githubLink').href = response.data['github_link'];
            }
        </script>
@endsection


