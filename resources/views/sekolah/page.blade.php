<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form action="{{ route('sekolah.add') }}" method="POST" class="w-full bg-white">
        @csrf @method('post')
        <div class="border min-h-screen w-full min-w-screen p-10">
            <div class="flex flex-col gap-5">
                <div class="flex flex-row gap-3 items-center border w-fit bg-white text-black p-3 rounded-md shadow-lg">
                    <x-heroicon-s-home-modern class="h-14 w-fit row-span-2"/>
                    <div class="">
                        <h1 class="font-bold text-xl text-blue-900">Lengkapi Data Sekolah</h1>
                    <p class="text-sm font-normal">Silahkan lengkap data di bawah ini.</p>
                    </div>
                </div>

                <div class="">
                    <div class="grid grid-cols-9 gap-x-7 gap-y-4">
                        {{-- Nama Sekolah --}}
                        <div class="flex flex-col col-span-3 bg-white text-black rounded-lg p-2 shadow-lg form-group">
                            <label for="name">Nama Sekolah</label>
                            <input type="text" name="name" id="name" placeholder="ex. SMA Negeri 1" class="">
                        </div>

                         {{-- NPSN Sekolah --}}
                        <div class="flex flex-col col-span-3 bg-white text-black rounded-lg p-2 shadow-lg form-group">
                            <label for="npsn">NPSN Sekolah - (Opsional)</label>
                            <input type="number" name="npsn" id="npsn" placeholder="ex. 0073615" class="">
                        </div>

                        {{-- Jenjang Sekolah --}}
                        <div class="flex flex-col col-span-3 bg-white text-black rounded-lg p-2 shadow-lg form-group">
                            <label for="jenjang">Jenjang Sekolah</label>
                            <select name="jenjang" id="jenjang">
                                <option value="">Pilih Jenjang</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="smk">SMK</option>
                            </select>
                        </div>

                        {{-- Alamat Sekolah --}}
                        <div class="flex flex-col col-span-6 bg-white text-black rounded-lg p-2 shadow-lg form-group">
                            <label for="alamat">Alamat Sekolah</label>
                            <input type="text" name="alamat" id="alamat" placeholder="ex. Kulon Progo, DIY" class="">
                        </div>

                        {{-- Email Sekolah --}}
                        <div class="flex flex-col col-span-3 bg-white text-black rounded-lg p-2 shadow-lg form-group">
                            <label for="email">Email Sekolah</label>
                            <input type="text" name="email" id="email" placeholder="ex. smanegeri@gmail.com" class="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-8">
                <a href="" class="text-white font-bold mt-10 bg-red-500 w-full py-1.5 rounded-lg hover:bg-neutral-600 transition-colors duration-200 shadow-lg inline-flex items-center justify-center">Log Out</a>
                <button type="submit" class="text-white font-bold mt-10 bg-blue-600 w-full py-1.5 rounded-lg hover:bg-neutral-600 transition-colors duration-200 shadow-lg">Simpan Data Sekolah</button>
            </div>
        </div>
    </form>
</x-guest-layout>
