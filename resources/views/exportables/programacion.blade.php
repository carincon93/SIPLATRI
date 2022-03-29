<style>
    table td {
        border: 1 px solid black
    }

</style>
<table class="table table-bordered table-horarios dataTable">
    <thead class="text-center">
        <tr>
            <th style="background-color:#fc7323"><b>Hora</b></th>
            <th style="background-color:#fc7323"><b>Lunes</b></th>
            <th style="background-color:#fc7323"><b>Martes</b></th>
            <th style="background-color:#fc7323"><b>Miércoles</b></th>
            <th style="background-color:#fc7323"><b>Jueves</b></th>
            <th style="background-color:#fc7323"><b>Viernes</b></th>
            <th style="background-color:#fc7323"><b>Sábado</b></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($franjas as $key => $franja)
            <tr>
                <td style="background-color:#238276; color: #FFffff">
                    <b>
                        <div>
                            {{ $franja->horaInicio . ' - ' . $franja->horaFin }}
                        </div>
                    </b>
                </td>
                <td>
                    @foreach ($horarios as $key => $asignacion)
                        @if ($asignacion->franja->id == $franja->id && $asignacion->dia == 'lunes')

                            <b>Ambiente</b> <br>
                            {{ $asignacion->nombreAmbiente }}
                            <br>
                            <b>Instructor </b><br>
                            {{ $asignacion->nombreInstructor }}
                            <br>
                            <b>Resultado </b><br>
                            {{ $asignacion->resultado_aprendizaje != null ? $asignacion->resultado_aprendizaje->descripcion : '' }}
                            {{-- Competencia <br>
                            {{ $asignacion->competencia->resumen }}
                            <br>
                            Resultados de aprendizaje <br>
                            <ul>
                                @foreach ($asignacion->competencia->resultadosAprendizaje as $resultadoAprendizaje)
                                    <li>{{ $resultadoAprendizaje->descripcion }}</li>
                                @endforeach
                            </ul> --}}
                            <br>
                            <b>Grupo </b><br>
                            {{ $asignacion->programaFormacionNombre . ' (' . $asignacion->numeroFicha . ')' }}
                            <br>
                            @if ($asignacion->fechaInicio)
                                Fechas <br>
                                Del {{ $asignacion->fechaInicio }} al {{ $asignacion->fechaFin }}
                            @endif
                            <br>
                            {{-- Municipio <br>
                            {{ $asignacion->programacion->municipio->nombre }} --}}

                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($horarios as $key => $asignacion)
                        @if ($asignacion->franja->id == $franja->id && $asignacion->dia == 'martes')

                            Ambiente <br>
                            {{ $asignacion->nombreAmbiente }}
                            <br>
                            Instructor <br>
                            {{ $asignacion->nombreInstructor }}
                            <br>
                            Resultado <br>
                            {{ $asignacion->resultado_aprendizaje != null ? $asignacion->resultado_aprendizaje->descripcion : '' }}
                            {{-- Competencia <br>
                            {{ $asignacion->competencia->resumen }}
                            <br>
                            Resultados de aprendizaje <br>
                            <ul>
                                @foreach ($asignacion->competencia->resultadosAprendizaje as $resultadoAprendizaje)
                                    <li>{{ $resultadoAprendizaje->descripcion }}</li>
                                @endforeach
                            </ul> --}}
                            <br>
                            Grupo <br>
                            {{ $asignacion->programaFormacionNombre . ' (' . $asignacion->numeroFicha . ')' }}
                            <br>
                            @if ($asignacion->fechaInicio)
                                Fechas <br>
                                Del {{ $asignacion->fechaInicio }} al {{ $asignacion->fechaFin }}
                            @endif
                            <br>
                            {{-- Municipio <br>
                            {{ $asignacion->programacion->municipio->nombre }} --}}

                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($horarios as $key => $asignacion)
                        @if ($asignacion->franja->id == $franja->id && $asignacion->dia == 'miercoles')

                            <b>Ambiente</b> <br>
                            {{ $asignacion->nombreAmbiente }}
                            <br>
                            <b>Instructor </b><br>
                            {{ $asignacion->nombreInstructor }}
                            <br>
                            <b>Resultado </b><br>
                            {{ $asignacion->resultado_aprendizaje != null ? $asignacion->resultado_aprendizaje->descripcion : '' }}
                            {{-- Competencia <br>
                            {{ $asignacion->competencia->resumen }}
                            <br>
                            Resultados de aprendizaje <br>
                            <ul>
                                @foreach ($asignacion->competencia->resultadosAprendizaje as $resultadoAprendizaje)
                                    <li>{{ $resultadoAprendizaje->descripcion }}</li>
                                @endforeach
                            </ul> --}}
                            <br>
                            <b>Grupo </b><br>
                            {{ $asignacion->programaFormacionNombre . ' (' . $asignacion->numeroFicha . ')' }}
                            <br>
                            @if ($asignacion->fechaInicio)
                                Fechas <br>
                                Del {{ $asignacion->fechaInicio }} al {{ $asignacion->fechaFin }}
                            @endif
                            <br>
                            {{-- Municipio <br>
                            {{ $asignacion->programacion->municipio->nombre }} --}}

                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($horarios as $key => $asignacion)
                        @if ($asignacion->franja->id == $franja->id && $asignacion->dia == 'jueves')

                            <b>Ambiente</b> <br>
                            {{ $asignacion->nombreAmbiente }}
                            <br>
                            <b>Instructor </b><br>
                            {{ $asignacion->nombreInstructor }}
                            <br>
                            <b>Resultado </b><br>
                            {{ $asignacion->resultado_aprendizaje != null ? $asignacion->resultado_aprendizaje->descripcion : '' }}
                            {{-- Competencia <br>
                            {{ $asignacion->competencia->resumen }}
                            <br>
                            Resultados de aprendizaje <br>
                            <ul>
                                @foreach ($asignacion->competencia->resultadosAprendizaje as $resultadoAprendizaje)
                                    <li>{{ $resultadoAprendizaje->descripcion }}</li>
                                @endforeach
                            </ul> --}}
                            <br>
                            <b>Grupo </b><br>
                            {{ $asignacion->programaFormacionNombre . ' (' . $asignacion->numeroFicha . ')' }}
                            <br>
                            @if ($asignacion->fechaInicio)
                                Fechas <br>
                                Del {{ $asignacion->fechaInicio }} al {{ $asignacion->fechaFin }}
                            @endif
                            <br>
                            {{-- Municipio <br>
                            {{ $asignacion->programacion->municipio->nombre }} --}}

                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($horarios as $key => $asignacion)
                        @if ($asignacion->franja->id == $franja->id && $asignacion->dia == 'viernes')

                            <b>Ambiente</b> <br>
                            {{ $asignacion->nombreAmbiente }}
                            <br>
                            <b>Instructor </b><br>
                            {{ $asignacion->nombreInstructor }}
                            <br>
                            <b>Resultado </b><br>
                            {{ $asignacion->resultado_aprendizaje != null ? $asignacion->resultado_aprendizaje->descripcion : '' }}
                            {{-- Competencia <br>
                            {{ $asignacion->competencia->resumen }}
                            <br>
                            Resultados de aprendizaje <br>
                            <ul>
                                @foreach ($asignacion->competencia->resultadosAprendizaje as $resultadoAprendizaje)
                                    <li>{{ $resultadoAprendizaje->descripcion }}</li>
                                @endforeach
                            </ul> --}}
                            <br>
                            <b>Grupo </b><br>
                            {{ $asignacion->programaFormacionNombre . ' (' . $asignacion->numeroFicha . ')' }}
                            <br>
                            @if ($asignacion->fechaInicio)
                                Fechas <br>
                                Del {{ $asignacion->fechaInicio }} al {{ $asignacion->fechaFin }}
                            @endif
                            <br>
                            {{-- Municipio <br>
                            {{ $asignacion->programacion->municipio->nombre }} --}}

                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($horarios as $key => $asignacion)
                        @if ($asignacion->franja->id == $franja->id && $asignacion->dia == 'sabado')

                            <b>Ambiente</b> <br>
                            {{ $asignacion->nombreAmbiente }}
                            <br>
                            <b>Instructor </b><br>
                            {{ $asignacion->nombreInstructor }}
                            <br>
                            <b>Resultado </b><br>
                            {{ $asignacion->resultado_aprendizaje != null ? $asignacion->resultado_aprendizaje->descripcion : '' }}
                            {{-- Competencia <br>
                            {{ $asignacion->competencia->resumen }}
                            <br>
                            Resultados de aprendizaje <br>
                            <ul>
                                @foreach ($asignacion->competencia->resultadosAprendizaje as $resultadoAprendizaje)
                                    <li>{{ $resultadoAprendizaje->descripcion }}</li>
                                @endforeach
                            </ul> --}}
                            <br>
                            <b>Grupo </b><br>
                            {{ $asignacion->programaFormacionNombre . ' (' . $asignacion->numeroFicha . ')' }}
                            <br>
                            <br>
                            @if ($asignacion->fechaInicio)
                                Fechas <br>
                                Del {{ $asignacion->fechaInicio }} al {{ $asignacion->fechaFin }}
                            @endif
                            <br>
                            {{-- Municipio <br>
                            {{ $asignacion->programacion->municipio->nombre }} --}}

                        @endif
                    @endforeach
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No hay franjas horarias definidas aún</td>
            </tr>
        @endforelse
    </tbody>
</table>
