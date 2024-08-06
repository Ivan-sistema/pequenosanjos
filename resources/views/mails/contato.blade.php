<center>
<table border="0">
            <tr style="display: block; padding: 5px;" border="0" width="600px">
                <td style="margin: 5px 25%"><img src="{{asset('assets/images/logotipo.png') }}" alt="Logotipo | {{ config('app.name', 'Instituto Pequenos Anjos') }}"></td>
            </tr>
            <tr style="display: block; padding: 5px;" border="0" width="600px">
                <td>
                    <p>Olá, você recebeu uma mensagem de contato vindo do site.</p>
                    </td>
                <tr style="display: block; padding: 5px;" border="0" width="600px">
                    <td>
                        <p>
                            Nome: {{$data['fromName']}}<br/>
                            Email: {{$data['fromEmail']}}</p>
                    </td>
            </tr>
            <tr style="display: block; padding: 5px;" border="0" width="600px">
                <td>Telefone: {{$data['telefone']}}</td>
                <td>Whatsapp: {{$data['whatsapp']}}</td>
            </tr>
            <tr  style="display: block; padding: 5px;" border="0" width="600px">
                <td style="text-align: center">
                    <p>Mensagem: {{$data['message']}}</p>
                </td>
            </tr>
        </table>

    </body>
</center>
