@extends('navbar')
    @section('conteudo')
    <div>
        <head>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </head>
        <script>

            window.onload = function() {
                $.alert({
                    columnClass: 'col-md-4 col-md-offset-4',
                    type: 'blue',
                    theme: 'modern',
                    title:  `Transmita seus pesamentos ao mundo !`,
                    content: ` 
                            <p class="text-black" style="font-size:12px;">Seja criativo, fale sobre algum assunto relevante ou compartilhe seus conhecimentos com as pessoas.<br> O céu é o limite !!!</p>
                        </div>
                    `,
                });

                tinymce.init({
                    selector: 'textarea',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                    ],
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                });


                
                $("#criarArtigo").click(function (e) { 
                    e.preventDefault();
                    
                    var formData = new FormData();

                    formData.append("titulo", $("#titulo").val());
                    formData.append("autor", $("#autor").val());
                    formData.append("categoria", $("#categoria").val());
                    formData.append("descricao_postagem", tinymce.activeEditor.getContent());

                    var foto = $("#foto")[0].files[0];
                    formData.append("foto", foto);
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "/criar",
                        data: formData, 
                        contentType: false,
                        processData: false,
                        dataType: "json",
                        success: function (response) {
                            let id = response.id;
                            window.location.href = '/postagem/' + id;
                        },
                        error: function (xhr, status, error) {
                            if (xhr.status === 422) {
                            
                            var errors = xhr.responseJSON.erros;

                            var errorMessages = '';
                            for (var key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    errorMessages += errors[key][0] + '<br>';
                                }
                            }

                            $.confirm({
                                title: ` 
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="30" height="30" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                    Erro de Validação`,
                                content: errorMessages,
                                type: 'red',
                                typeAnimated: true,
                                buttons: {
                                    ok: {
                                        text: 'OK',
                                        btnClass: 'btn-primary',
                                        action: function(){
                                            //
                                        }
                                    }
                                }
                            }); 
                        } else {
                            alert("Erro desconhecido: " + error);
                        }
                        }
                    });
                });

            }
        </script>
        <div class="container-fluid">
            <div class="container border shadow text-left"></div>
        </div>
        <div class="row m-2">
            <h3> Criar novo artigo</h3>
        </div>
        <div class="container m-4">
            <div class="mb-3">
                <label for="titulo" class="form-label"><b>Titulo</b></label>
                <input type="text" class="form-control" id="titulo" placeholder="Informe o Titulo aqui">
            </div>
            
            <div class="mb-3">
                <label for="categoria" class="form-label"><b>categoria</b></label>
                <input type="text" class="form-control" id="categoria" placeholder="Informe o categoria aqui">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label"><b>Foto para o artigo </b></label>
                <input class="form-control form-control-sm" id="foto" type="file">
            </div>
            <div class="mb-3">
                <label for="descricao_postagem" class="form-label"><b>Conteudo do artigo </b></label>
                <textarea class="form-control" id="descricao_postagem" rows="15"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" id="criarArtigo" type="button">Postar</button>
            </div>
        </div>
</div>
@endsection
