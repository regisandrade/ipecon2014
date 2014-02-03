<div id="pagina-interna">
     <div class="internaCtrl">
          <div class="titulo">Pré-Inscrição</div>
          <div class="texto">
               <table>
                    <tr>
                         <td>Curso:</td>
                         <td><select name="codg_curso" id="codg_curso" onChange="mostrarCidadeCurso();">
                              <option value="">[-- Selecionar --]</option>
                              <?php
                              foreach ($cursos as $curso) { ?>
                                   <option value="<?php echo $curso['Codg_Curso']; ?>" <?php echo ($_REQUEST['codigo'] == $curso['Codg_Curso'] ? 'selected="selected"' : '')?>><?php echo utf8_encode($curso['Nome']); ?></option>
                              <?php } ?>
                         </td>
                    </tr>
                    <tr id="trCidadeCurso">
                         <td>Cidade do Curso:</td>
                         <td><select name="cidadeCurso" id="cidadeCurso">
                              <option value="" selected>[-- Selecionar --]</option>
                              <option value="Anápolis">Anápolis</option>
                              <option value="Ceres">Ceres</option>
                              <option value="Cidade de Goiás">Cidade de Goiás</option>
                              <option value="Goiânia">Goiânia</option>
                              <option value="Itumbiara">Itumbiara</option>
                              <option value="Pires do Rio">Pires do Rio</option>
                              <option value="Porangatu">Porangatu</option>
                              <option value="Rio Verde">Rio Verde</option>
                              <option value="Trindade">Trindade</option>
                              <option value="Uruaçu">Uruaçu</option>
                         </select>
                         </td>
                    </tr>
                    <tr>
                         <td>Ano do curso: </td>
                         <td><select name="ano" class="txtInscricaoMini" id="ano">
                              <?php
                              for($i = 2003; $i <= date('Y')+1; $i++){
                              ?>
                                   <option value="<?=$i; ?>" <?php if($i == date('Y')){ echo 'selected'; }?>><?=$i; ?></option>
                              <?php
                              }
                              ?>
                              </select>
                         </td>
                    </tr>
                    <tr>
                         <td>Nome:</td>
                         <td><input name="nome" type="text" id="nome"></td>
                    </tr>
                    <tr>
                         <td>Data de Nascimento:</td>
                         <td><input name="data_nascimento" type="text" id="data_nascimento" />&nbsp;<font color="#FF0000" size="1" face="Verdana">sem "/"</font></td>
                    </tr>
                    <tr>
                         <td>Naturalidade:</td>
                         <td><input name="naturalidade" type="text" id="naturalidade"></td>
                    </tr>
                    <tr>
                         <td>UF:</td>
                         <td><select name="uf_1">
                              <option value="">UF</option>
                              <option value="AC">AC</option>
                              <option value="AL">AL</option>
                              <option value="AM">AM</option>
                              <option value="BA">BA</option>
                              <option value="CE">CE</option>
                              <option value="DF">DF</option>
                              <option value="ES">ES</option>
                              <option value="GO" selected>GO</option>
                              <option value="MA">MA</option>
                              <option value="MG">MG</option>
                              <option value="MS">MS</option>
                              <option value="MT">MT</option>
                              <option value="PA">PA</option>
                              <option value="PB">PB</option>
                              <option value="PE">PE</option>
                              <option value="PI">PI</option>
                              <option value="PR">PR</option>
                              <option value="RJ">RJ</option>
                              <option value="RN">RN</option>
                              <option value="RO">RO</option>
                              <option value="RR">RR</option>
                              <option value="RS">RS</option>
                              <option value="SC">SC</option>
                              <option value="SE">SE</option>
                              <option value="SP">SP</option>
                              <option value="TO">TO</option>
                         </select>
                         </td>
                    </tr>
                    <tr>
                         <td>Nacionalidade:</td>
                         <td><input name="nacionalidade" type="text" id="nacionalidade" value="Brasileira"></td>
                    </tr>
                    <tr>
                         <td>Sexo:</td>
                         <td><input name="sexo" type="radio" value="M" checked>M<br><input type="radio" name="sexo" value="F">F</td>
                    </tr>
                    <tr>
                         <td>Identidade (RG):</td>
                         <td><input name="rg" type="text" id="rg">&nbsp;<span style="padding-left: 50px;">Órgão Exp.:&nbsp;<input name="orgao" type="text" id="orgao" size="7" maxlength="7"></td>
                    </tr>
                    <tr>
                         <td>N&ordm; C.P.F.:</td>
                         <td><input name="cpf" id="cpf" type="text"></td>
                    </tr>
                    <tr>
                         <td>Endereço:</td>
                         <td><input name="endereco" type="text" id="endereco"></td>
                    </tr>
                    <tr>
                         <td>Bairro:</td>
                         <td><input name="bairro" type="text" id="bairro"></td>
                    </tr>
                    <tr>
                         <td>Cidade:</td>
                         <td><input name="cidade" type="text" id="cidade"></td>
                    </tr>
                    <tr>
                         <td>UF:</td>
                         <td><select name="uf_2">
                              <option value="">UF</option>
                              <option value="AC">AC</option>
                              <option value="AL">AL</option>
                              <option value="AM">AM</option>
                              <option value="BA">BA</option>
                              <option value="CE">CE</option>
                              <option value="DF">DF</option>
                              <option value="ES">ES</option>
                              <option value="GO" selected>GO</option>
                              <option value="MA">MA</option>
                              <option value="MG">MG</option>
                              <option value="MS">MS</option>
                              <option value="MT">MT</option>
                              <option value="PA">PA</option>
                              <option value="PB">PB</option>
                              <option value="PE">PE</option>
                              <option value="PI">PI</option>
                              <option value="PR">PR</option>
                              <option value="RJ">RJ</option>
                              <option value="RN">RN</option>
                              <option value="RO">RO</option>
                              <option value="RR">RR</option>
                              <option value="RS">RS</option>
                              <option value="SC">SC</option>
                              <option value="SE">SE</option>
                              <option value="SP">SP</option>
                              <option value="TO">TO</option>
                         </select>
                         </td>
                    </tr>
                    <tr>
                         <td>CEP:</td>
                         <td><input name="cep" type="text" id="cep"></td>
                    </tr>
                    <tr>
                         <td>Telefones</td>
                         <td>&nbsp;</td>
                    </tr>
                    <tr>
                         <td>Resid&ecirc;ncial:</td>
                         <td><input name="fone_residencial" type="text" id="fone_residencial"></td>
                    </tr>
                    <tr>
                         <td>Comercial:</td>
                         <td><input name="fone_comercial" type="text" id="fone_comercial"></td>
                    </tr>
                    <tr>
                         <td>Celular:</td>
                         <td><input name="celular" type="text" id="celular"></td>
                    </tr>
                    <tr>
                         <td>e-Mail:</td>
                         <td><input name="email" type="text" id="email"></td>
                    </tr>
                    <tr>
                         <td>Curso de Graduação:</td>
                         <td><input name="curso" type="text" id="curso"></td>
                    </tr>
                    <tr>
                         <td>Instituição:</td>
                         <td><input name="instituicao" type="text" id="instituicao"></td>
                    </tr>
                    <tr>
                         <td>Sigla da instituição:</td>
                         <td><input name="sigla" type="text" id="sigla">&nbsp;Conclusão:&nbsp;<input name="conclusao" type="text" id="conclusao" size="6" maxlength="4"></td>
                    </tr>
                    <tr>
                         <td>Como ficou sabendo:</td>
                         <td>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="1" />&nbsp;Mala direta (CORREIOS)<br/>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="2" />&nbsp;Outdoor<br/>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="3" />&nbsp;E-mail Marketing (newsletter)<br/>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="4" />&nbsp;Folder (material impresso)<br/>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="5" />&nbsp;Eventos (palestras, etc.)<br/>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="6" />&nbsp;Indicação de ex alunos<br/>
                              <input type="radio" name="ficouSabendo" id="ficouSabendo" value="7" />&nbsp;Outros
                         </td>
                    </tr>
                    <tr>
                         <td>&nbsp;</td>
                         <td><input name="ok" type="submit" class="" id="ok" value="Enviar" style="text-align:center">&nbsp;&nbsp;<input name="limpar" type="reset" class="botao" id="limpar" onClick="history.back()" value="Limpar" style="text-align:center"></td>
                    </tr>
               </table>
          </div>
     </div>
</div>