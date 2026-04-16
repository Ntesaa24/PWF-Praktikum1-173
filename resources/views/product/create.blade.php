<x-app-layout>
    <div class="py-12 px-4 sm:px-6 lg:px-8 bg-[#0f111a] min-h-screen" style="background-color: #0f111a;">
        <div class="max-w-xl mx-auto">
            {{-- Header with Back Arrow --}}
            <div class="flex items-center gap-4 mb-8">
                <a href="{{ route('product.index') }}" class="p-2 rounded-lg bg-white/5 text-slate-400 hover:text-white transition-colors border border-white/5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-white tracking-tight">Add Product</h1>
                    <p class="text-slate-500 text-sm">Fill in the details to add a new product</p>
                </div>
            </div>

            <div class="rounded-2xl shadow-2xl overflow-hidden p-8" style="background-color: #131520; border: 1px solid rgba(255,255,255,0.05);">
                <form action="{{ route('product.store') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- Name Input --}}
                    <div class="space-y-2">
                        <label for="name" class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Produk</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="e.g. Wireless Headphone"
                            class="w-full border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-600 focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all duration-300"
                            style="background-color: #0d0e14; color: #ffffff;">
                        @error('name')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Grid: Qty & Price --}}
                    <div class="grid grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="quantity" class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Quantity</label>
                            <input type="number" id="quantity" name="quantity" value="{{ old('quantity', 0) }}"
                                placeholder="0" min="0"
                                class="w-full border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-600 focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all duration-300"
                                style="background-color: #0d0e14; color: #ffffff;">
                            @error('quantity')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="price" class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Price (Rp)</label>
                            <input type="number" id="price" name="price" value="{{ old('price', 0) }}"
                                placeholder="0" min="0"
                                class="w-full border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-600 focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all duration-300"
                                style="background-color: #0d0e14; color: #ffffff;">
                            <p class="text-[10px] text-slate-500 mt-1 uppercase tracking-wider font-bold">Input angka saja (tanpa titik)</p>
                            @error('price')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="pt-4 flex items-center justify-end gap-4">
                        <a href="{{ route('product.index') }}" 
                           class="px-6 py-2 text-slate-400 hover:text-white text-xs font-bold uppercase tracking-widest transition-colors">
                            Cancel
                        </a>
                        
                        <button type="submit" 
                                class="px-8 py-3 text-white font-bold rounded-xl transition-all duration-300 shadow-lg active:scale-95"
                                style="background-color: #4f46e5;">
                            Save Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
