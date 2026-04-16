<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="rounded-[2rem] overflow-hidden shadow-2xl shadow-black/50" style="background-color: #131520; border: 1px solid rgba(255,255,255,0.05);">
                <div class="px-10 py-8 bg-white/[0.02] border-b border-white/5">
                    <h1 class="text-3xl font-bold text-white tracking-tight">About Me</h1>
                    <p class="text-slate-500 mt-2">Personal profile and professional identity</p>
                </div>
                
                <div class="p-10 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-1">
                            <span class="text-slate-500 font-bold uppercase tracking-widest text-[10px]">Full Name</span>
                            <p class="text-xl font-bold text-white">Notesa Aldinasari</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-slate-500 font-bold uppercase tracking-widest text-[10px]">NIM</span>
                            <p class="text-xl font-bold text-indigo-400 font-mono">20230140173</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-slate-500 font-bold uppercase tracking-widest text-[10px]">Study Program</span>
                            <p class="text-lg font-semibold text-slate-200">Teknologi Informasi</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-slate-500 font-bold uppercase tracking-widest text-[10px]">Interests</span>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="px-3 py-1 bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-bold rounded-lg uppercase tracking-wider">Ngoding</span>
                                <span class="px-3 py-1 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-bold rounded-lg uppercase tracking-wider">Development</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
