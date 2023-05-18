{{-- About section --}}

<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/me1.jpeg') }}" alt="" class="rounded-2xl w-full" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/me3.jpeg') }}" alt="" class="rounded-2xl w-full" />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="{{ url('/img/me2.jpeg') }}" alt="" class="rounded-2xl w-full" />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                            "Keep moving forward: Keep confidence, stay hopeful and positive. Everything is achievable
                            with hard work. Collective hard work and small success"
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-white mb-8">
                        About me:
                    </h2>
                    <p class="text-base dark:text-white mb-8">
                        I have been working as a professional software developer for 3+ years. <br />
                        During my career I have worked on various types of projects with various technologies, such as:
                        <br />
                        Python Django REST Framework, Python Flask, Laravel PHP 8 Framework, React.js, Vue.js. MySQL,
                        PostGreSQL, Apache, MongoDB, etc.<br />
                        I also learn some stacks, such as: MERN, MEVN, etc.
                    </p>
                    <p class="text-base dark:text-white mb-8">
                        In my freetime, I create a youtube channel to share about education and University <br />
                        I have interviewed a couple of famous people, starting from a CEO to inspirational figures.
                        <br />
                        So far, we have around hundreds of videos talking about Famous university, such as MIT, Harvard,
                        Stanford, NUS, NTU, etc.<br />
                    </p>
                    <x-button-link href="https://www.youtube.com/getkampus" variant="red" target="_blank">
                        View My Channel
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About section ends here --}}
