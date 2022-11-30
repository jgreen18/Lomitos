<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        {{-- Nothing in the world is as soft and yielding as water. --}}
        <h1>Si este título se muestra, el componente funciona</h1>
        <x-table>
            <table class="min-w-full leading-normal divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th
                            class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Servicio
                        </th>
                        <th
                            class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Mascota
                        </th>
                        <th
                            class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Fecha
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Hora
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status de la cita
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hcitas as $hcita)
                        <tr>
                            {{-- @foreach ($servicios as $servicio) --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{-- {{ $servicio->nombre }} --}}
                                        {{$hcita->servicio_id}}
                                    </p>
                                </td>
                            {{-- @endforeach --}}
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{-- @foreach ($mascotas as $mascota) --}}
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{-- {{ $mascota->nombre }} --}}
                                        {{$hcita->mascota_id}}
                                    </p>
                                {{-- @endforeach --}}

                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $hcita->fecha_cita }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $hcita->hora_cita }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $hcita->cstatus_id }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">

                                </p>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </x-table>
    </div>
</div>
