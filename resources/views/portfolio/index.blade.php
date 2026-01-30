@extends('portfolio.layouts.app')

@section('content')
    <!-- ----- home section ------ -->
    <div class="w-11/12 max-w-3xl text-center mx-auto h-screen flex flex-col items-center justify-center gap-4">
        <h3 class="flex items-end gap-2 text-xl md:text-2xl mt-10 sm:mt-10 mb-3 font-Ovo marginTop">
            Hi! I&apos;m Ahmad Shoukat
            <img src="{{ asset('frontend/assets/hand-icon.png') }}" alt="" class="w-6 mb-1" />
        </h3>
        <h1 class="text-3xl sm:text-6xl lg:text-[66px] font-Ovo">
            full stack web developer.
        </h1>
        <p class="max-w-2xl mx-auto font-Ovo">
            I'm a full stack developer based in Lahore, Pakistan, with 2 years of
            experience building scalable and user-friendly web applications.
        </p>

        <div class="flex flex-col sm:flex-row items-center gap-4 mt-4">
            <a href="#contact"
                class="px-10 py-2.5 border rounded-full bg-gradient-to-r from-[#b820e6] to-[#da7d20] text-white flex items-center gap-2 dark:border-transparent">
                Contact Me
                <img src="{{ asset('frontend/assets/right-arrow-white.png') }}" alt="" class="w-4" />
            </a>

            <a href="{{ asset('Ahmed.pdf') }}" download="Ahmed.pdf"
                class="px-10 py-2.5 rounded-full border border-gray-300 dark:border-white/25 hover:bg-slate-100/70 dark:hover:bg-darkHover flex items-center gap-2 bg-white dark:bg-transparent dark:text-white">
                My Resume
                <img src="{{ asset('frontend/assets/download-icon.png') }}" alt="" class="w-4 dark:invert" />
            </a>
        </div>
    </div>

    <!-- ----- about me section ------ -->
    <div id="about" class="w-full px-[12%] py-20 mt-10 scroll-mt-20">
        <h2 class="text-center text-4xl font-Ovo mt-10">About me</h2>
        <div class="flex w-full flex-col lg:flex-row gap-20 my-20">
            <div class="max-w-max mx-auto relative">
                <img src="{{ asset('frontend/assets/about3.jpg') }}" alt=""
                    class="w-64 sm:w-96 rounded-3xl max-w-none" />
                <div
                    class="bg-white w-36 aspect-square absolute right-0 bottom-0 rounded-full translate-x-1/4 translate-y-1/3 shadow-[0_4px_55px_rgba(149,0,162,0.15)] flex items-center justify-center">
                    <img src="{{ asset('frontend/assets/circular-text.png') }}" alt=""
                        class="w-full animate-spin_slow" />
                    <img src="{{ asset('frontend/assets/dev-icon.png') }}" alt=""
                        class="w-1/4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" />
                </div>
            </div>
            <div class="flex-1">
                <p class="mb-10 max-w-2xl font-Ovo text-justify">
                    I am a passionate and results-driven Full Stack Developer with 
                    over 2 years of hands-on experience in designing and developing modern, 
                    scalable web applications using the MERN stack. I specialize
                    in building responsive and interactive user interfaces with React
                    and Next.js, as well as developing secure and efficient backend
                    systems using Node.js and Express. I have strong experience working
                    with MongoDB, designing RESTful APIs, and integrating third-party
                    services to enhance application functionality. I follow clean code
                    practices and focus on performance, security, and maintainability
                    in every project I work on. My goal is to deliver high-quality,
                    user-focused solutions while continuously improving my technical
                    skills and staying up to date with the latest web technologies. I
                    enjoy solving complex problems, collaborating with cross-functional
                    teams, and contributing to impactful digital products.
                </p>

            </div>
        </div>
        <div>
             <ul class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-20">
                    <li
                        class="border border-gray-300 dark:border-white/30 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1 duration-500 hover:shadow-black dark:hover:shadow-white/80 dark:hover:bg-darkHover/50">
                        <img src="{{ asset('frontend/assets/code-icon.png') }}" alt=""
                            class="w-7 mt-3 dark:hidden" /><img src="{{ asset('frontend/assets/code-icon-dark.png') }}"
                            alt="" class="w-7 mt-3 hidden dark:block" />
                        <h3 class="my-4 font-semibold text-gray-700 dark:text-white">
                            Languages
                        </h3>
                        <p class="text-gray-600 text-sm dark:text-white/80">
                            HTML, CSS, JavaScript, Boostrap, React.Js, Next.Js, Node.Js, Express.Js, TypeScript, Tailwind.Css
                            Material.Ui, MongoDB, Postrasql, Sql, Supabase,
                        </p>
                    </li>
                    <li
                        class="border border-gray-300 dark:border-white/30 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1 duration-500 hover:shadow-black dark:hover:shadow-white/80 dark:hover:bg-darkHover/50">
                        <img src="{{ asset('frontend/assets/edu-icon.png') }}" alt=""
                            class="w-7 mt-3 dark:hidden" /><img src="{{ asset('frontend/assets/edu-icon-dark.png') }}"
                            alt="" class="w-7 mt-3 hidden dark:block" />
                        <h3 class="my-4 font-semibold text-gray-700 dark:text-white">
                            Education
                        </h3>
                        <p class="text-gray-600 text-sm dark:text-white/80">
                            Bachelor of Science in Software Engineering
                        </p>
                    </li>
                    <li
                        class="border border-gray-300 dark:border-white/30 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1 duration-500 hover:shadow-black dark:hover:shadow-white/80 dark:hover:bg-darkHover/50">
                        <img src="{{ asset('frontend/assets/project-icon.png') }}" alt=""
                            class="w-7 mt-3 dark:hidden" /><img src="{{ asset('frontend/assets/project-icon-dark.png') }}"
                            alt="" class="w-7 mt-3 hidden dark:block" />
                        <h3 class="my-4 font-semibold text-gray-700 dark:text-white">
                            Projects
                        </h3>
                        <p class="text-gray-600 text-sm dark:text-white/80">
                            Delivered 5+ real-world projects with clean and scalable code.
                        </p>
                    </li>
                </ul>
                <h4 class="my-6 text-gray-700 font-Ovo dark:text-white/80">
                    Tools i use
                </h4>
                <div class="">
                    <ul class="flex items-center gap-3 sm:gap-12 flex-wrap">
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/html-5.png') }}" alt="html" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/css-3.png') }}" alt="css" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/javascript.png') }}" alt="javascript" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/react.png') }}" alt="react" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/nextjs.png') }}" alt="nextjs" class="w-5 sm:w-16" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/mongodb.png') }}" alt="mongodb" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/nodejs.png') }}" alt="nodejs" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/mysql.png') }}" alt="mysql" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/typescript.png') }}" alt="typescript" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/supabase.png') }}" alt="supabase" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/git.png') }}" alt="git" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/github-icon-dark.png') }}" alt="github" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/material-ui.png') }}" alt="material-ui" class="w-5 sm:w-10" />
                        </li>
                        <li
                            class="flex items-center justify-center w-20 sm:w-16 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                            <img src="{{ asset('frontend/assets/postman.png') }}" alt="postman" class="w-5 sm:w-10" />
                        </li>
                    </ul>
                </div>
        </div>
    </div>

    <!-- My Work Section -->
    <div id="work" class="w-full px-[12%] py-20 mt-10 scroll-mt-20">
        <h4 class="text-center mb-2 text-lg font-Ovo">My portfolio</h4>
        <h2 class="text-center text-4xl font-Ovo">My latest work</h2>
        <p class="text-center max-w-2xl mx-auto mt-5 mb-12 font-Ovo">
            Below are some of my latest projects, showcasing my skills in full stack
            web development. Each project reflects my focus on clean design,
            efficient functionality, and modern technologies to build user-friendly
            and scalable applications.
        </p>
        <div class="grid grid-cols-auto my-10 gap-5 dark:text-black">
            @forelse($projects as $project)
                <a href="{{ $project->link ? $project->link : '#' }}" target="{{ $project->link ? '_blank' : '_self' }}"
                    class="aspect-square bg-no-repeat bg-cover bg-center rounded-lg relative cursor-pointer group block"
                    style="background-image: url('{{ $project->image ? asset($project->image) : asset('frontend/assets/work-1.png') }}')">
                    <div
                        class="bg-white w-10/12 rounded-md absolute bottom-5 left-1/2 -translate-x-1/2 py-3 px-5 flex items-center justify-between duration-500 group-hover:bottom-7">
                        <div>
                            <h2 class="font-semibold">{{ $project->name }}</h2>
                            <p class="text-sm text-gray-700">{{ Str::limit($project->description, 50) }}</p>
                        </div>
                        <div
                            class="border rounded-full border-black w-9 aspect-square flex items-center justify-center shadow-[2px_2px_0_#000] group-hover:bg-lime-300 transition">
                            <img src="{{ asset('frontend/assets/send-icon.png') }}" alt="" class="w-5" />
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-500 font-Ovo">No projects available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Project Submission Section --}}
    <div id="project-submission"
        class="w-full px-[12%] py-20 mt-10 scroll-mt-20 bg-[url('{{ asset('frontend/assets/footer-bg-color.png') }}')] bg-no-repeat bg-[length:90%_auto] bg-center dark:bg-none">

        <h4 class="text-center mb-2 text-lg font-Ovo">Project Submission</h4>
        <h2 class="text-center text-4xl font-Ovo">Submit Your Project Details</h2>
        <p class="text-center max-w-5xl mx-auto mt-5 mb-12 font-Ovo">
            Share your project requirements with me. I'll review your details and get back to you with a proposal.
        </p>

        {{-- Success Message for Project Submission --}}
        @if (session('project_success'))
            <div class="max-w-2xl mx-auto mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative dark:bg-green-900/30 dark:border-green-700 dark:text-green-300"
                role="alert">
                <span class="block sm:inline">{{ session('project_success') }}</span>
            </div>
        @endif

        {{-- Error Messages for Project Submission --}}
        @if ($errors->any() && (old('project_name') || old('project_description') || request()->hasFile('project_file')))
            <div class="max-w-2xl mx-auto mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative dark:bg-red-900/30 dark:border-red-700 dark:text-red-300"
                role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('project.form.store') }}" method="POST" enctype="multipart/form-data"
            class="max-w-3xl mx-auto">
            @csrf

            <!-- Email -->
            <div class="mb-6">
                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                    class="w-full px-4 py-2 focus:ring-1 outline-none border  dark:border-white/30
            rounded-md bg-white dark:bg-darkHover/30 @error('email') border-red-500 @enderror"
                    required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Project Name -->
            <div class="mb-6">
                <input type="text" name="project_name" placeholder="Project name" value="{{ old('project_name') }}"
                    class="w-full px-4 py-2 focus:ring-1 outline-none border  dark:border-white/30
            rounded-md bg-white dark:bg-darkHover/30 @error('project_name') border-red-500 @enderror"
                    required>
                @error('project_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Project Description -->
            <div class="mb-6">
                <textarea rows="6" name="project_description" placeholder="Describe your project"
                    class="w-full px-4 py-2 focus:ring-1 outline-none border  dark:border-white/30
            rounded-md bg-white dark:bg-darkHover/30 @error('project_description') border-red-500 @enderror"
                    required>{{ old('project_description') }}</textarea>
                @error('project_description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Project File (PDF, DOC, DOCX) -->
            <div class="mb-6">
                <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-white/80">
                    Upload Project File (PDF, DOC, DOCX - Max 10MB)
                </label>
                <input type="file" name="project_file" accept=".pdf,.doc,.docx"
                    class="w-full px-4 py-2 border dark:border-white/30
            rounded-md bg-white dark:bg-darkHover/30 @error('project_file') border-red-500 @enderror"
                    required>
                @error('project_file')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="py-2 px-8 w-max flex items-center justify-between gap-2 bg-black/80 text-white
        rounded-full mx-auto hover:bg-black duration-500
        dark:bg-transparent dark:border dark:border-white/30 dark:hover:bg-darkHover">
                Submit Project
                <img src="{{ asset('frontend/assets/right-arrow-white.png') }}" alt="" class="w-4" />
            </button>
        </form>
    </div>


    <!-- Contact me section -->
    <div id="contact"
        class="w-full px-[12%] py-20 mt-10 scroll-mt-20 bg-[url('{{ asset('frontend/assets/footer-bg-color.png') }}')] bg-no-repeat bg-[length:90%_auto] bg-center dark:bg-none">
        <h4 class="text-center mb-2 text-lg font-Ovo">Connect with me</h4>
        <h2 class="text-center text-5xl font-Ovo">Get in touch</h2>
        <p class="text-center max-w-5xl mx-auto mt-5 mb-12 font-Ovo">
            I'd love to hear from you! If you have any questions, comments or
            feedback, please use the form below.
        </p>

        {{-- Success Message for Contact Form --}}
        @if (session('contact_success'))
            <div class="max-w-2xl mx-auto mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative dark:bg-green-900/30 dark:border-green-700 dark:text-green-300"
                role="alert">
                <span class="block sm:inline">{{ session('contact_success') }}</span>
            </div>
        @endif

        {{-- Error Messages for Contact Form --}}
        @if ($errors->any() && (old('name') || old('phone') || (old('email') && !old('project_name'))))
            <div class="max-w-2xl mx-auto mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative dark:bg-red-900/30 dark:border-red-700 dark:text-red-300"
                role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="max-w-3xl mx-auto">
            @csrf
            <div class="grid grid-cols-auto gap-6 mt-10 mb-8">
                <input type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}"
                    class="flex-1 px-3 py-2 focus:ring-1 outline-none border dark:border-white/30 rounded-md bg-white dark:bg-darkHover/30 @error('name') border-red-500 @enderror"
                    required />
                <input type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}"
                    class="flex-1 px-3 py-2 focus:ring-1 outline-none border dark:border-white/30 rounded-md bg-white dark:bg-darkHover/30 @error('email') border-red-500 @enderror"
                    required />
            </div>
            <div class="mb-6">
                <input type="tel" placeholder="Enter your phone number" name="phone" value="{{ old('phone') }}"
                    class="w-full px-3 py-2 focus:ring-1 outline-none border rounded-md bg-white dark:bg-darkHover/30 @error('phone') border-red-500 @else dark:border-white/30 @enderror"
                    required />
                @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <textarea rows="6" placeholder="Enter your message" name="message"
                class="w-full px-4 py-2 focus:ring-1 outline-none border rounded-md bg-white mb-6 dark:bg-darkHover/30 @error('message') border-red-500 @else  dark:border-white/30 @enderror"
                required>{{ old('message') }}</textarea>
            @error('message')
                <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
            @enderror
            <button type="submit"
                class="py-2 px-8 w-max flex items-center justify-between gap-2 bg-black/80 text-white rounded-full mx-auto hover:bg-black duration-500 dark:bg-transparent dark:border dark:border-white/30 dark:hover:bg-darkHover">
                Submit now
                <img src="{{ asset('frontend/assets/right-arrow-white.png') }}" alt="" class="w-4" />
            </button>
        </form>
    </div>
@endsection
