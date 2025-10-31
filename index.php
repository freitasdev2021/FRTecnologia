<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>FR Tecnologia — Soluções em Nuvem para o Setor Público</title>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <div class="container header-inner">
    <a href="#top" class="brand">
      <div class="brand-badge">FR</div>
      <div class="brand-title">
        <h1>FR Tecnologia</h1>
        <p>Tecnologia para o setor público</p>
      </div>
    </a>

    <nav class="nav" aria-label="Navegação principal">
      <ul>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#clientes">Clientes</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </nav>

    <button class="mobile-toggle" id="openMenu" aria-label="Abrir menu">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- mobile -->
  <div class="mobile-menu" id="mobileMenu">
    <ul>
      <li><a href="#sobre">Sobre</a></li>
      <li><a href="#produtos">Produtos</a></li>
      <li><a href="#servicos">Serviços</a></li>
      <li><a href="#clientes">Clientes</a></li>
      <li><a href="#contato">Contato</a></li>
    </ul>
  </div>
</header>

<main id="top">
  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <span class="kicker">Transparência, eficiência e cidadania</span>
        <h2>Modernizamos a gestão pública com soluções em nuvem</h2>
        <p>
          Desde 2024 atuamos exclusivamente com o setor público. Nossas plataformas
          aumentam a eficiência, melhoram a comunicação com a população e elevam o padrão de transparência.
        </p>
        <div class="cta">
          <a href="#contato" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Solicitar demonstração</a>
          <a href="#produtos" class="btn btn-outline"><i class="fa-solid fa-grid-2"></i> Ver produtos e serviços</a>
        </div>
      </div>

      <aside class="hero-card" aria-label="Resumo FR Tecnologia">
        <div class="chip"><i class="fa-solid fa-building-columns"></i> Setor Público</div>
        <p style="margin:12px 0 0">
          A FR Tecnologia, sediada em Ipatinga/MG, nasceu em 2022. Em 2024, passamos a atuar
          exclusivamente no setor público com foco em nuvem, eficiência e transparência.
        </p>
        <div class="hero-stats">
          <div class="stat"><strong>6</strong><span>Estados atendidos</span></div>
          <div class="stat"><strong>7</strong><span>Órgãos parceiros</span></div>
          <div class="stat"><strong>100%</strong><span>Foco em governo</span></div>
        </div>
      </aside>
    </div>
  </section>

  <!-- Sobre -->
  <section id="sobre">
    <div class="container">
      <h2 class="section-title">Sobre a FR Tecnologia</h2>
      <p class="section-sub">
        Tecnologia que impulsiona o setor público. Nossa missão é modernizar a administração
        por meio de soluções em nuvem que trazem eficiência, transparência e melhor comunicação com a população.
      </p>

      <div class="grid grid-2">
        <div class="card">
          <h3>Nossa história</h3>
          <p>
            Criada em 2022 pelo Maior Programador de Ipatinga aos 21 Anos de idade para trabalhar PJ Para outra empresa, 
            em Agosto de 2023 Criou um Sistema para a Iniciativa privada e não deu muito certo, a beira da falência, em março de 2024, identificamos uma grande demanda no setor público
            por modernização, gestão de processos e comunicação eficiente — dedicamo-nos 100% a esse propósito.
          </p>
        </div>
        <div class="card">
          <h3>Presença nacional</h3>
          <p>
            Atualmente, estamos presentes em seis estados, atendendo sete órgãos públicos e expandindo nossa
            atuação para todo o Brasil, com foco em qualidade, segurança e rapidez de entrega.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Produtos -->
  <section id="produtos">
    <div class="container">
      <h2 class="section-title">Produtos</h2>
      <p class="section-sub">Produtos que facilitam a gestão pública</p>

      <div class="grid grid-3">
        <div class="card">
          <div class="chip"><i class="fa-solid fa-chalkboard-user"></i> Gestão Educacional</div>
          <h3>FR Educacional</h3>
          <p>
            Matrículas, turmas, frequência, relatórios, comunicação escola-família e portal do aluno — tudo em nuvem.
          </p>
        </div>

        <div class="card">
          <div class="chip"><i class="fa-solid fa-chalkboard-user"></i> Comunicação</div>
          <h3>PortalFreitas</h3>
          <p>
            Portal Institucional,E-SIC,Ouvidoria,Chatbot,Campanhas de Comunicação,Integração com PNCP
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Serviços -->
  <section id="servicos">
    <div class="container">
      <h2 class="section-title">Serviços</h2>
      <p class="section-sub">Serviços que modernizam a gestão pública</p>

      <div class="grid grid-3">
        <div class="card">
          <i class="fa-solid fa-globe fa-lg" style="color:var(--primary)"></i>
          <h3>Desenvolvimento e Hospedagem de Sites</h3>
          <p>Portais responsivos, acessíveis e integrados a serviços públicos, com SEO e desempenho.</p>
        </div>
        <div class="card">
          <i class="fa-solid fa-at fa-lg" style="color:var(--primary)"></i>
          <h3>Armazenamento de E-mails</h3>
          <p>Caixas corporativas seguras, antispam, migração assistida e políticas de retenção.</p>
        </div>
        <div class="card">
          <i class="fa-solid fa-mobile-screen-button fa-lg" style="color:var(--primary)"></i>
          <h3>Aplicativos & Sistemas Personalizados</h3>
          <p>Desenvolvimento sob medida para fluxos específicos do órgão, APIs e integrações.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clientes -->
  <section id="clientes">
    <div class="container">
      <h2 class="section-title">Clientes</h2>
      <p class="section-sub">Órgãos públicos que confiam na FR Tecnologia</p>

      <div class="clients">
        <div class="client">
          <img src="img/crtes.png" alt="Logo Prefeitura 1" style="background:#1b5783;">
          <span>Conselho Regional dos Técnicos Industriais do Espirito Santo</span>
        </div>
        <div class="client">
          <img src="img/corepb.png" alt="Logo Instituto 1" style="background:#233e63;">
          <span>Conselho Regional dos Representantes Comerciais da Paraíba</span>
        </div>
        <div class="client">
          <img src="img/saojoaodalagoa.png" alt="Logo Secretaria 1">
          <span>Secretaria Municipal de Educação de São João da Lagoa</span>
        </div>
        <div class="client">
          <img src="img/guaxupe.png" alt="Logo Prefeitura 2">
          <span>Câmara Municipal de Guaxupé</span>
        </div>
        <div class="client">
          <img src="img/crease.png" alt="Logo Câmara 1">
          <span>Conselho Regional de Engenharia de Agronomia de Sergipe</span>
        </div>
        <div class="client">
          <img src="img/aimores.png" alt="Logo Secretaria 1" style="background:#ffab00;">
          <span>Secretaria Municipal de Educação de Aimorés</span>
        </div>
        <div class="client">
          <img src="img/peixe.png" alt="Logo Secretaria 1">
          <span>Secretaria Municipal de Educação de Peixe</span>
        </div>
        <div class="client">
          <img src="img/consaude_ribeira.png" alt="Logo Secretaria 1">
          <span>Consórcio Intermunicipal de Saúde do Vale do Ribeira.</span>
        </div>
      </div>

      <div class="sep"></div>

      <div class="grid grid-2">
        <div class="card">
          <h3>Parcerias públicas</h3>
          <p>Trabalhamos de forma colaborativa com as equipes internas, respeitando processos e compliance.</p>
        </div>
        <div class="card">
          <h3>Suporte dedicado</h3>
          <p>Atendimento com SLA, canais oficiais e monitoramento proativo de serviços críticos.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato">
    <div class="container">
      <h2 class="section-title">Fale com a gente</h2>
      <p class="section-sub">Solicite uma demonstração ou converse com nosso time técnico.</p>

      <div class="grid grid-2">
        <form class="card" id="formDemo">
          <div class="grid" style="grid-template-columns:1fr 1fr;gap:12px">
            <div>
              <label for="nome" style="font-weight:600">Nome</label>
              <input id="nome" name="nome" required class="input" />
            </div>
            <div>
              <label for="email" style="font-weight:600">E-mail</label>
              <input id="email" name="email" type="email" required class="input" />
            </div>
          </div>
          <div style="margin-top:12px">
            <label for="orgao" style="font-weight:600">Órgão público</label>
            <input id="orgao" name="orgao" class="input" />
          </div>
          <div style="margin-top:12px">
            <label for="msg" style="font-weight:600">Mensagem</label>
            <textarea id="msg" name="msg" rows="4" class="input"></textarea>
          </div>
          <button class="btn btn-primary" type="submit" style="margin-top:14px">
            <i class="fa-solid fa-paper-plane"></i> Enviar
          </button>
        </form>

        <div class="card">
          <h3>Ipatinga/MG</h3>
          <p>
            Atendemos em todo o Brasil com time remoto e infraestrutura em nuvem.
          </p>
          <p><i class="fa-solid fa-envelope"></i> contato@frtecnologiadigital.com.br</p>
          <a href="https://wa.me/5531983086235"><i class="fa-brands fa-whatsapp"></i> (31) 98308-6235</a>
          <p style="color:var(--muted)">Responderemos em até 1 dia útil.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="footer">
  <div class="container" style="padding:28px 0">
    <div class="cols">
      <div>
        <div class="brand" style="gap:10px">
          <div class="brand-badge">FR</div>
          <div class="brand-title">
            <h1 style="color:#fff">FR Tecnologia</h1>
            <p>Inovação que transforma a administração pública.</p>
          </div>
        </div>
        <p style="margin:12px 0 0">
          Soluções em nuvem, desenvolvimento e infraestrutura para governos.
        </p>
      </div>
      <!-- <div>
        <h4>Produtos</h4>
        <p><a href="#produtos">Gestão Educacional</a></p>
        <p><a href="#produtos">Disparador de E-mails</a></p>
        <p><a href="#produtos">Infraestrutura em Nuvem</a></p>
      </div> -->
      <div>
        <h4>Institucional</h4>
        <p><a href="#sobre">Sobre</a></p>
        <p><a href="#clientes">Clientes</a></p>
        <p><a href="#contato">Contato</a></p>
      </div>
    </div>

    <div class="copyright">
      © <span id="year"></span> FR Tecnologia — Ipatinga/MG. Todos os direitos reservados.
    </div>
  </div>
</footer>
<script src="script.js"></script>
</body>
<script>
document.getElementById("formDemo").addEventListener("submit", function (e) {
    e.preventDefault(); // impede envio normal

    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const orgao = document.getElementById("orgao").value;
    const msg = document.getElementById("msg").value;

    // monta o texto com quebra de linha usando %0A
    const texto =
        "Nova mensagem via formulário:%0A" +
        "Nome: " + encodeURIComponent(nome) + "%0A" +
        "E-mail: " + encodeURIComponent(email) + "%0A" +
        "Órgão público: " + encodeURIComponent(orgao) + "%0A" +
        "Mensagem: " + encodeURIComponent(msg);
    // console.log(texto)
    // return false;
    // número do WhatsApp (DDD + número, sem + ou -)
    const numero = "5531983086235"; // <-- altere aqui

    // link final
    const link = "https://wa.me/" + numero + "?text=" + texto;

    // redireciona
    window.location.href = link;
});
</script>
</html>