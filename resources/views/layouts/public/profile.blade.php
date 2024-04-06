@extends('layouts.public.app')
@section('content')

<!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Profile</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">

                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="{{ asset('assets/public/assets/resume.pdf') }}" download>
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Agus 2021 - Present</div>
                                                <div class="small fw-bolder">UI/UX Designer</div>
                                                <div class="small text-muted">PT Infosys Solusi Terpadu, Yogyakarta</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>I am responsible for improving the user experience. IST collaborated with Bank Tabungan Negara, Mandiri, BRI and others to design a high-fidelity design that would provide an intuitive user experience while meeting all their needs. I am also responsible for developing design systems for mobile and web platforms as well as icon creation, illustration as needed.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Feb 2021 - Mar 2021</div>
                                                <div class="small fw-bolder">Tim Desain (Magang)</div>
                                                <div class="small text-muted">Griya Website, Yogyakarta</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Worked on many projects involving various design tools, including Adobe Photoshop, CorelDraw, and Adobe Illustrator. I have worked on many projects for companies, where the designs will be sold on several platforms.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 3-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Des 2020 - Jan 2021</div>
                                                <div class="small fw-bolder">Tim IT (Magang)</div>
                                                <div class="small text-muted">Griya Website, Yogyakarta</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Working on a company landing page using Wordpress Elementor. I have created design requirements involving design tools, including Adobe Photoshop, CorelDraw, and Adobe Illustrator.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 4-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Sep 2020 - Nov 2020</div>
                                                <div class="small fw-bolder">Web Desain (Magang)</div>
                                                <div class="small text-muted">Kominfo Banyuwangi, Banyuwangi</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>I act as FrontEnd developer as well as User Interface and User Experience Designer. I use Figma tools for the User Interface and User Experience Designer creation process and use Vue.Js for the FrontEnd framework.</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2021 - Present</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Sistem Informasi</div>
                                                    <div class="small text-muted">Universitas Mercubuana Yogyakarta</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>I took the information systems study program, for the reason that the study program is in accordance with my current field of work.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2018 - 2021</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Rekayasa Perangkat Lunak</div>
                                                    <div class="small text-muted">SMK Telkom Malang</div>
                                                </div>                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>I majored in RPL, where I learned a lot. Learning PHP programming language and focusing on using Laravel(BackEnd) and Vue.Js(FrontEnd) frameworks. </div></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Divider-->
                        <div class="pb-5"></div>

                        <!-- Skills Section-->
                        <section>

                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-box"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">UI Design</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Wireframing</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Prototyping</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Illustration</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Iconly</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Animate</div></div>
                                        </div>
                                    </div>

                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-vector-pen"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Tools</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Figma</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe XD</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">LottieFiles</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Marvel</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Illustration</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe After Effect</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

@endsection