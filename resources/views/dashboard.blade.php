<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <!-- Table Section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
                    @if(session()->has('success'))
                        <div>
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div>
                    <a href="{{ route('characters.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Character</a>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table-auto w-full border-collapse">
                        <thead>
                            <tr>
                            <th class="px-4 py-2">Image</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Relic</th>
                              
                                <th class="px-4 py-2">2pcs</th>
                           
                                <th class="px-4 py-2">Planetaryset</th>
                            
                                <th class="px-4 py-2">Lightcone</th>
                             
                                <th class="px-4 py-2">Edit</th>
                                <th class="px-4 py-2">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($c as $ca) <!--database awal c-->
                            <tr>
                            <td class="px-4 py-2"><img src="{{ asset($ca->file) }}" alt="img" class="w-32 h-32 object-cover"></td>
                                <td class="px-4 py-2">{{ $ca->description }}</td>
                                <td class="px-4 py-2"><img src="{{ asset($ca->relic) }}" alt="relic" class="w-32 h-32 object-cover"></td>
                                
                                <td class="px-4 py-2"><img src="{{ asset($ca->relic2) }}" alt="2pcs" class="w-32 h-32 object-cover"></td>
                                
                                <td class="px-4 py-2"><img src="{{ asset($ca->planetaryset) }}" alt="planetaryset" class="w-32 h-32 object-cover"></td>
                               
                                <td class="px-4 py-2"><img src="{{ asset($ca->lightcone) }}" alt="lightcone" class="w-32 h-32 object-cover"></td>
                               
                                <td class="px-4 py-2"><a href="{{ route('characters.edit', ['character' => $ca]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a></td>
                                <td class="px-4 py-2">
                                    <form method="post" action="{{ route('characters.destroy', ['character' => $ca]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                        
                    </table>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table-auto w-full border-collapse">
                        <thead>
                            <tr>
                        
                                <th class="px-4 py-2">Relic Description</th>
                                <th class="px-4 py-2">Relic Description2ndpcs</th>
                                
                                <th class="px-4 py-2">Planetaryset Description</th>
                                
                                <th class="px-4 py-2">Lightcone Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($c as $ca) <!--database awal c-->
                            <tr>
                            
                          
                                <td class="px-4 py-2">{{ $ca->relicdescription }}</td>
                  
                                <td class="px-4 py-2">{{ $ca->relicdescription2pcs }}</td>
                                
                                <td class="px-4 py-2">{{ $ca->planetarysetdescription }}</td>
                                
                                <td class="px-4 py-2">{{ $ca->lightconedescription }}</td>
                              
                
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                </div>
            </div>
        </div>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        @if(session()->has('success'))
                            <div>
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div>
                        <a href="{{ route('events.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Event</a>
                    </div>
                    <div class="overflow-x-auto mt-5">
                        <table class="table-auto w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">EVENT/MiniEvent</th>
                                    <th class="px-4 py-2">Event Type</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Edit</th>
                                    <th class="px-4 py-2">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($e as $ev)
                                <tr>
                                    <td class="px-4 py-2"><img src="{{ asset($ev->file) }}" alt="img" class="w-32 h-32 object-cover"></td>
                                    <td class="px-4 py-2">{{ $ev->event_type }}</td>
                                    <td class="px-4 py-2">{{ $ev->description }}</td>
                                    <td class="px-4 py-2"><a href="{{ route('events.edit', ['event' => $ev]) }}" class="bg-green-500 hover:bg-green">Edit</a></td>
                                    <td class="px-4 py-2">
                                    <form method="post" action="{{ route('events.destroy', ['event' => $ev]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                        
                    </table>
    </div>
</div>

</x-app-layout>