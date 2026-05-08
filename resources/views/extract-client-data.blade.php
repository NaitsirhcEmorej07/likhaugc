<x-app-layout>

    <div class="min-h-screen bg-gradient-to-b from-pink-50 via-white to-pink-100 py-10 px-4 sm:px-6 lg:px-8">

        <div class="max-w-7xl mx-auto">

            <!-- HEADER -->
            <div class="text-center mb-10">

                <div
                    class="inline-flex items-center gap-2 bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-semibold mb-4 shadow-sm">

                    ✨ LIKHA UGC AI EXPORTER

                </div>

                <h1 class="text-3xl sm:text-5xl font-black text-gray-900 leading-tight">
                    Extract Client Data
                </h1>

                <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
                    Generate AI-ready JSON data instantly from your creator submissions.
                </p>

            </div>


            <!-- TABLE CARD -->
            <div class="bg-white rounded-3xl shadow-xl border border-pink-100 overflow-hidden">

                <!-- TABLE HEADER -->
                <div
                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 p-6 border-b border-gray-100">

                    <div>

                        <h2 class="text-xl font-bold text-gray-900">
                            Creator List
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            Manage and export creator information.
                        </p>

                    </div>

                    <div
                        class="bg-pink-50 text-pink-600 px-4 py-2 rounded-xl text-sm font-semibold border border-pink-100">

                        Total Clients: {{ $clients->total() }}

                    </div>

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full min-w-[1000px]">

                        <thead class="bg-pink-50 border-b border-pink-100">

                            <tr>

                                <th
                                    class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-pink-600">
                                    ID
                                </th>

                                <th
                                    class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-pink-600">
                                    Creator
                                </th>

                                <th
                                    class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-pink-600">
                                    Username
                                </th>

                                <th
                                    class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-pink-600">
                                    Email
                                </th>

                                <th
                                    class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-pink-600">
                                    Status
                                </th>

                                <th
                                    class="text-center px-6 py-4 text-xs font-bold uppercase tracking-wider text-pink-600">
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100 bg-white">

                            @forelse($clients as $client)
                                <tr class="hover:bg-pink-50 transition duration-200">

                                    <!-- ID -->
                                    <td class="px-6 py-5 text-sm font-semibold text-gray-700">
                                        #{{ $client->id }}
                                    </td>


                                    <!-- CREATOR -->
                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-4">

                                            <img src="{{ $client->avatar }}"
                                                class="w-14 h-14 rounded-2xl object-cover border border-pink-100 shadow-sm">

                                            <div>

                                                <div class="font-bold text-gray-900">
                                                    {{ $client->full_name }}
                                                </div>

                                                <div class="text-xs text-gray-500 mt-1 line-clamp-1">
                                                    {{ $client->bio }}
                                                </div>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- USERNAME -->
                                    <td class="px-6 py-5 text-sm text-gray-700">
                                        {{ $client->username }}
                                    </td>


                                    <!-- EMAIL -->
                                    <td class="px-6 py-5 text-sm text-gray-700">
                                        {{ $client->email }}
                                    </td>


                                    <!-- STATUS -->
                                    <td class="px-6 py-5">

                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold capitalize

                                            {{ $client->status === 'approved' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">

                                            {{ $client->status }}

                                        </span>

                                    </td>


                                    <!-- ACTION -->
                                    <td class="px-6 py-5 text-center">

                                        <button onclick='generateJSON(@json($client))'
                                            class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-pink-700 text-white px-5 py-3 rounded-2xl font-semibold shadow-lg shadow-pink-200 transition duration-300 hover:scale-105">

                                            🤖 Generate JSON

                                        </button>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6" class="px-6 py-12 text-center text-gray-500">

                                        No creator data found.

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="px-6 py-5 bg-gray-50 border-t border-gray-100">

                    {{ $clients->links() }}

                </div>

            </div>



            <!-- JSON OUTPUT -->
            <div class="mt-10 bg-white rounded-3xl shadow-xl border border-pink-100 overflow-hidden">

                <!-- HEADER -->
                <div
                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 p-6 border-b border-gray-100">

                    <div>

                        <h2 class="text-xl font-bold text-gray-900">
                            AI JSON Output
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            Copy and paste directly into ChatGPT, Claude, Gemini, or DeepSeek.
                        </p>

                    </div>


                    <button onclick="copyJSON()"
                        class="bg-gray-900 hover:bg-black text-white px-5 py-3 rounded-2xl font-semibold transition duration-300">

                        📋 Copy JSON

                    </button>

                </div>


                <!-- CODE AREA -->
                <div class="p-6 bg-gray-950">

                    <pre id="jsonOutput"
                        class="text-green-400 text-sm whitespace-pre-wrap break-words overflow-auto min-h-[320px] leading-relaxed">Click "Generate JSON" to preview creator data...</pre>

                </div>

            </div>

        </div>

    </div>



    <script>
        function generateJSON(client) {

            // REMOVE AVATAR
            delete client.avatar;

            const formatted = JSON.stringify(client, null, 4);

            document.getElementById('jsonOutput').textContent = formatted;

            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });

        }



        function copyJSON() {

            const text = document.getElementById('jsonOutput').textContent;

            navigator.clipboard.writeText(text);

            alert('JSON copied successfully!');

        }
    </script>

</x-app-layout>
