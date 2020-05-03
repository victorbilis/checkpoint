<!DOCTYPE html>
<html style="margin: 0px;padding: 0px;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Teste</title>

    </head>
    <style>
            @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 3.5cm;
                margin-left: 0.5cm;
                margin-right: 0.5cm;
                margin-bottom: 2.8cm;
            }

            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3.5cm;

                /** Extra personal styles **/
                background-color: #fff;
                text-align: center;
                margin-left: 10px;
                margin-bottom: 10px;
                margin-right: 10px;

            }

            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2.8cm;
            }
            

            td{
              padding: 2px;
            }

            tr{
              margin: 2px;
            }

            table{
              margin-top: 5px;
              margin-bottom: 15px;
            }
            hr{
              margin-bottom: 3cm;
            }
            .google_earth{
              margin: 40px;
            }
              .logo_inicial{
                margin-top: 160px;
                margin-bottom: 40px;
              }
</style>
    <body>
    <script type="text/php">
      if (isset($pdf)) {
        
          $x = 550;
          $y = 800;
          $text = "Página {PAGE_NUM}";
          $font = null;
          $size = 10;
          $color = array(0,0,0);
          $word_space = 0.0;
          $char_space = 0.0;
          $angle = 0.0;
          $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        

      }
    </script>

    <header>
      <center>
        <table width="100%" style="border-bottom:4px solid #f79835;">
          <tbody>
            <tr>
              <td><label style="font-size:25px;color:#595959"><b>Proposta</b> <label style="font-size:14px;color:#595959"><b> Nº 312321312</b></label></label></td>
            </tr>
            <tr>
            <td width="50%"><label style="font-size:14px;color:#595959"><b>Cliente:</b> dsadasdas</label></td>
              <td width="50%"><label style="font-size:14px;color:#595959"><b>Vendedor:</b> dasdasdas</label></td>
            </tr>
          </tbody>
        </table>
        </center>
        
    </header>

    
    <footer>
        <center>
        <table width="100%" style="border-bottom:4px solid #f79835;">
          <tbody>
            <tr>
                <td></td>
            </tr>
          </tbody>
        </table>
        </center>
        <center>
        </center>
    </footer>

    <main>

      <center>
        <table width="100%">
          <tbody>
          </tbody>
        </table>
        </center>
        
        <center>
        <table width="100%">
          <tbody>
            <tr>
              
                <td><label style="font-size:18px;color:#000;"><b>FORNECIMENTO DE MATERIAIS PARA PROTEÇÃO AMBIENTAL E INDIVIDUAL</b></label></td>
            </tr>
          </tbody>
        </table>
        </center>
        <center>
        <table width="100%">
          <tbody>
            <tr><td><label style="font-size:16px;color:#000;"><b>DIFERENCIAIS</b></label></td>
            </tr>
          </tbody>
        </table>
        </center>
        <center>
        <table width="100%">
          <tbody>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Líder no mercado de produtos para proteção ambiental</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Maior estoque do Brasil</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Disponibilidade de atendimento 24 horas por dia, 7 dias por semana</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Certificações: ISO 9001, ISO 14001, ISO 45001 e ISO 22320</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Melhor custo benefício do mercado</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Produtos à pronta entrega</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Mais de 5 países atendidos</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Processo produtivo automatizado, garantindo o padrão e a qualidade dos produtos</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Consultoria Técnica Gratuita</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Linha absorvente rende mais de 30% que a concorrência</label></td>
            </tr>
          </tbody>
        </table>
        </center>

        <table width="100%" style="margin-bottom:0px">
          <tbody>
            <tr>
                <td><label style="font-size:16px;color:#000;"><b>INFORMAÇÕES GERAIS</b></label></td>
            </tr>
          </tbody>
        </table>

        <center>
        <table width="100%">
          <tbody>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Prazo de validade desta proposta será de 7 dias úteis</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Após o prazo de validade da propostas, será acrescido 5% no valor</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Todos os impostos estão inclusos na proposta</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Endereço para retirada: Rodovia Anhanguera Km 120, Nº 550 Galpão 01-Distrito Industrial I-Nova Odessa/SP-CEP: 13388-220</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> As partes obrigam-se a manter sigilo sobre dados, documentos, especificações técnicas e condições comerciais desta Proposta, qualquer que seja a forma de conhecimento, não podendo, sob qualquer pretexto, revelar reproduzir ou deles dar conhecimento a terceiros</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Os pagamentos efetuados com atraso estarão sujeitos ao acréscimo de multa de 10% (dez por cento), mais juros de 2% ao mês</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> O CONTRATANTE tem conhecimento de que, na hipótese de atraso ou inadimplência de qualquer das parcelas, as mesmas poderão ser levadas a protesto, entregues à firma de cobrança ou ainda ser informada ao Serviço de Proteção ao Crédito, além de estar sujeito à cobrança judicial, observada a legislação. As despesas efetuadas pela Ambclean em razão da cobrança dos encargos supracitados em atraso, sejam por via administrativa, sejam judiciais, assim como os honorários advocatícios, se for o caso, serão suportados pela CONTRATANTE</label></td>
            </tr>
            <tr>
                <td width="100%"><label style="font-size:14px;color:#7f7f7f;"><b>-</b> Caso a CONTRATANTE esteja em mora, a AMBIPAR poderá exigir que os débitos sejam quitados, antes de realizar a entrega do produto</label></td>
            </tr>
          </tbody>
        </table>
        </center>

        <center>
        <table width="100%">
          <tbody>
            <tr>
                <td><label style="font-size:16px;color:#000;"><b>PROPOSTA </b></label></td>
            </tr>
          </tbody>
        </table>
        </center>



        <center>
        <table width="100%">
          <tbody>
          </tbody>
        </table>
        </center>
    </main>

</body>
</html>