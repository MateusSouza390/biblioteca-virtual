<?php
include_once 'verifica_login.php';
?>

<?php
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}
?>	
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="public/css/02index-biblio.css">
    <link rel="shortcut icon" href="public/assets/img/letter-b.png" type="image/x-icon">
    <script src="public/assets/js/script.js"></script>
</head>
<body>
    <header>
        <div class="esq">
        <div class="text-logo">
        <h1 class="text">Biblioteca Virtual</h1>
</div>
</div>
    </header>

    <div class="container">
        <nav>
            <div class="user-container">
            <div class="user-icon" id="user-icon" onclick="showUserInfo()">
            <div class="user-ico">
            <img src="public/assets/img/user-ico.png">
</div>
            <div class="user-info" id="user-info">
            <button class= "exitbutton" onclick="logout()">
                    <div class="login-button"><h6 class="flex">Sair<img width="5" height="5" src="https://img.icons8.com/ios/50/FFFFFF/exit--v1.png" alt="exit"/></h6></div></button>
                    
                
                </div>
            <div class="user-title">
            <h1>
                <?php echo "Olá, " . $_SESSION['nome'] . ""; ?>
            <span class="user-level">Usuário</span>
            </h1>
            
             
            </div>
            </div>
            </div>

            <script>
function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "public/assets/menu_white_36dp.svg";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "public/assets/close_white_36dp.svg";
    }
}

// ICON INTERATIVO
function showUserInfo() {
    const userInfo = document.getElementById('user-info');
    
    // Verifique se o elemento está visível ou oculto
    if (userInfo.style.display === 'block') {
        // Se estiver visível, oculte-o
        userInfo.style.display = 'none';
    } else {
        // Se estiver oculto, mostre-o
        userInfo.style.display = 'block';
    }
}

function logout() {
    alert('Você foi desconectado.');
    window.location.href = "logout.php";
}


// PESQUISA
const suggestionToUrlMap = {
    "Futebol": "../esportes/futsal.php",
    "Voleibol": "../esportes/volei.php",
    "Queimada": "../esportes/queimada.php",
    "Xadrez": "../esportes/xadrez.php",
    "FIFA": "../esportes/fifa.php",
    "Interclasse": "../noticias/index.php",
    "Equipes": "../equipes/index.php",
};

const searchInput = document.getElementById('search-input');
const suggestionsList = document.getElementById('suggestions');

searchInput.addEventListener('input', function () {
    const inputValue = searchInput.value.toLowerCase();
    const filteredSuggestions = Object.keys(suggestionToUrlMap).filter(suggestion => suggestion.toLowerCase().includes(inputValue));

    displaySuggestions(filteredSuggestions);

    // Verifique se o valor do campo de entrada está vazio
    if (inputValue === '') {
        suggestionsList.style.display = 'none';
    }
});

function displaySuggestions(suggestionsArray) {
    suggestionsList.innerHTML = '';

    if (suggestionsArray.length === 0) {
        suggestionsList.style.display = 'none';
        return;
    }

    suggestionsArray.forEach(suggestion => {
        const listItem = document.createElement('li');
        listItem.textContent = suggestion;
        listItem.addEventListener('click', function () {
            redirectToPage(suggestion);
        });
        suggestionsList.appendChild(listItem);
    });

    suggestionsList.style.display = 'block';
}

function redirectToPage(query) {
    const url = suggestionToUrlMap[query];
    if (url) {
        window.location.href = url;
    } else {
        alert("URL não encontrada para esta sugestão.");
    }
}

</script>
            <aside class="list">
            <ul>
                
                <li><a href="#"><span class="images"><img  width="20" height="20" src="https://img.icons8.com/external-itim2101-fill-itim2101/64/FFFFFF/external-book-back-to-school-itim2101-fill-itim2101.png" alt="external-book-back-to-school-itim2101-fill-itim2101"/></span>Empréstimos</a></li>
                <li><a href="#"><span class="images"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/book.png" alt="book"/></span>Livros</a></li>
                <li><a href="#"><span class="images"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/menu-2.png" alt="menu-2"/></span>Categorias</a></li>
                <li><a href="#"><span class="images"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/about.png" alt="about"/></span>Sobre Nós</a></li>
                <li><a href="#"><span class="images"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/apple-contacts.png" alt="apple-contacts"/></span>Contato</a></li>
            </ul>
                </div>
</aside>
        </nav>

        
    </div>

    <footer>
        <p>&copy; 2023 Biblioteca Virtual. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
