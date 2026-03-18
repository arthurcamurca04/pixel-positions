<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" method="POST" class="mt-6">
                <input type="text" placeholder="Web developer..." class="rounded-xl bg-white/15 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section>
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag size="xl">Back-end</x-tag>
                <x-tag size="xl">Front-end</x-tag>
                <x-tag size="xl">API</x-tag>
                <x-tag size="xl">Software Engineer</x-tag>
                <x-tag size="xl">DevOps</x-tag>
                <x-tag size="xl">Database Analyst</x-tag>
                <x-tag size="xl">AI</x-tag>
                <x-tag size="xl">PHP</x-tag>
                <x-tag size="xl">HTML</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                <x-job-card-lg/>
                <x-job-card-lg/>
                <x-job-card-lg/>
            </div>
        </section>
    </div>
</x-layout>
