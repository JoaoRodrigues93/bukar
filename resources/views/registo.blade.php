
<!-- Registo de Aluno -->
<div id="reg-aluno" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registo - Aluno</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="/registo/aluno">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome" placeholder="nome">
                        <input type="text" class="form-control" id="apelido" placeholder="apelido">
                        <div class="form-group">
                            <label>Data de Nascimento:</label>
                            <br>
                            <select class="input-sm" id="dia">
                                    <option>Dia</option>
                                @for ($i=1; $i<=31; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            <select class="input-sm id="mes">
                                <option value="1">Mês</option>
                                <option value="2">Janeiro</option>
                                <option value="3">Fevereiro</option>
                                <option value="4">Março</option>
                                <option value="5">Abril</option>
                                <option value="6">Maio</option>
                                <option value="7">Junho</option>
                                <option value="8">Julho</option>
                                <option value="9">Agosto</option>
                                <option value="10">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                            <select class="input-sm id="ano">
                                <option>Ano</option>
                                @for ($i=1975; $i<=2015; $i++)
                               <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="nome de utilizador">
                        <input type="password" class="form-control" id="pwd" placeholder="password">
                        <input type="password" class="form-control" id="re-pwd" placeholder="re-password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox">Aceito os termos e condições</label>
                    </div>
                    <button type="submit" class="btn btn-default">Registar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>

    </div>
</div>