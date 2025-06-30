🛡️ Validador de Formulários em PHP
Um projeto simples, direto ao ponto, para validar campos básicos de um formulário usando PHP puro, com feedback visual e organização em arquivos separados (PHP, HTML e CSS).

✨ Funcionalidades
Verifica campos obrigatórios: nome, e-mail e senha

Valida formato de e-mail com filter_var

Valida tamanho da senha (6 a 16 caracteres)

Exibe mensagens de erro claras

Exibe mensagem de sucesso se tudo estiver ok

Separado em três arquivos para manutenção fácil

📁 Estrutura do projeto
bash
Copiar
Editar
/validacao-php
├── formulario.html     # Formulário com campos e layout
├── validador.php       # Lógica de validação do backend
└── style.css           # Estilos e feedbacks visuais
💡 Como usar
Instale um servidor local com suporte a PHP (como XAMPP ou Laragon)

Coloque os arquivos em uma pasta dentro do diretório htdocs ou equivalente

Acesse via navegador: http://localhost/nome-da-pasta/formulario.html

Preencha e envie o formulário

🧪 Teste
Deixe algum campo vazio: veja a mensagem de erro

Digite um e-mail inválido: erro claro

Coloque uma senha curta: erro de comprimento

Preencha tudo corretamente: mensagem de sucesso!

📄 Licença
MIT

