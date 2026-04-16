<x-app-layout>
    <div class="py-12 px-4 sm:px-6 lg:px-8 bg-[#0f111a] min-h-screen" style="background-color: #0f111a;">
        <div class="max-w-xl mx-auto">
            {{-- Header with Back Arrow --}}
            <div class="flex items-center gap-4 mb-8">
                <a href="{{ route('product.index') }}" class="p-2 rounded-lg bg-white/5 text-slate-400 hover:text-white transition-colors border border-white/5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-white tracking-tight">Product Detail</h1>
                    <p class="text-slate-500 text-sm">Viewing information for product #{{ $product->id }}</p>
                </div>
            </div>

            <div class="rounded-2xl shadow-2xl overflow-hidden" style="background-color: #131520; border: 1px solid rgba(255,255,255,0.05);">
                <div class="p-8">
                    {{-- Detail List --}}
                    <div class="space-y-6">
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em]">Nama Produk</span>
                            <div class="text-xl font-semibold text-white">{{ $product->name }}</div>
                        </div>

                        <div class="grid grid-cols-2 gap-8 pt-4 border-t border-white/5">
                            <div class="space-y-1">
                                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em]">Quantity</span>
                                @php $isLowStock = $product->qty < 10; @endphp
                                <div class="flex items-center gap-2">
                                    <div class="text-lg font-bold {{ $isLowStock ? 'text-red-500' : 'text-emerald-500' }}">
                                        {{ $product->qty }}
                                    </div>
                                    @if($isLowStock)
                                        <span class="text-[9px] px-2 py-0.5 bg-red-500/10 text-red-500 border border-red-500/20 rounded-full font-bold uppercase tracking-wider">Low Stock</span>
                                    @endif
                                </div>
                            </div>

                            <div class="space-y-1">
                                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em]">Price (Rp)</span>
                                <div class="text-lg font-bold text-white tabular-nums">
                                    {{ number_format($product->price, 0, ',', '.') }}
                                </div>
                            </div>
                        </div>

                        <div class="space-y-1 pt-4 border-t border-white/5">
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em]">Owner</span>
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-indigo-500/20 flex items-center justify-center text-[10px] font-bold text-indigo-400 border border-indigo-500/20">
                                    {{ substr($product->user->name ?? '?', 0, 1) }}
                                </div>
                                <span class="text-slate-300 text-sm">{{ $product->user->name ?? '-' }}</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/5 text-[10px] text-slate-600 font-bold uppercase tracking-wider">
                            <div>Added: {{ $product->created_at->format('d M Y') }}</div>
                            <div class="text-right">Updated: {{ $product->updated_at->format('d M Y') }}</div>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="mt-10 pt-6 border-t border-white/5 flex items-center justify-between">
                        <form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500/70 hover:text-red-500 text-xs font-bold uppercase tracking-widest transition-colors flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                Delete
                            </button>
                        </form>

                        <a href="{{ route('product.edit', $product->id) }}" 
                           class="px-8 py-3 text-white font-bold rounded-xl transition-all duration-300 shadow-lg active:scale-95"
                           style="background-color: #4f46e5;">
                            Edit Product
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
