<?php
/**
 * Template Name: Mandalla Prime Landing Page
 */
get_header();
?>

<main id="inicio">
  <section class="hero">
    <div class="container hero-grid">
      <div class="reveal">
        <div class="eyebrow">Roupas e acessórios religiosos premium</div>
        <h1>
          Vista sua <span class="gold-line">fé com presença e destaque</span>
          - peças únicas feitas para impressionar
        </h1>
        <p>
          <strong>Atendimento rápido no WhatsApp + peças sob medida</strong> para ocasiões especiais, eventos e giras onde sua presença precisa se destacar.
        </p>

        <div class="hero-actions">
          <a class="btn btn-wa wa-link" href="#">Quero escolher minha peça agora</a>
          <a class="btn btn-outline" href="#destaques">Falar com especialista agora</a>
        </div>

        <div class="proof-strip">
          <div class="proof-chip">Atendimento rápido no WhatsApp</div>
          <div class="proof-chip">Peças com presença e identidade</div>
          <div class="proof-chip">Envio para todo o Brasil</div>
        </div>
      </div>

      <aside class="hero-card reveal">
        <div class="hero-logo-wrap">
          <img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mandalla Prime Logo">
        </div>

        <div class="hero-stats">
          <div class="mini-stat">
            <strong>Atendimento direto</strong>
            <span>Você tira dúvidas, consulta peças e recebe resposta mais rápida.</span>
          </div>
          <div class="mini-stat">
            <strong>Peças marcantes</strong>
            <span>Visual forte, acabamento bonito e presença em cada detalhe.</span>
          </div>
          <div class="mini-stat">
            <strong>Sob encomenda</strong>
            <span>Possibilidade de alinhar estilo, ocasião e preferência.</span>
          </div>
          <div class="mini-stat">
            <strong>Compra fácil</strong>
            <span>Você chama no WhatsApp e resolve tudo sem complicação.</span>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <!-- SEÇÃO ESTRATÉGICA: TESTES DE COPYWRITING -->
  <section class="section" id="copy-tests" style="background: linear-gradient(135deg, rgba(244,208,111,.08), rgba(212,31,40,.12) 50%, rgba(255,255,255,.02));">
    <div class="container">
      <div class="section-head reveal">
        <div class="section-label">Testes de Conversão</div>
        <h2>5 abordagens estratégicas para seu público espiritual</h2>
        <p class="lead">Copies focadas em dor + desejo + sonho, sem frase bonita vazia - tudo com intenção de conversão.</p>
        <p class="lead">
          A página precisa vender com emoção, mas também reduzir dúvida. Por isso os gatilhos aqui trabalham presença, praticidade, confiança e ação imediata.
        </p>
      </div>

      <div class="usp-grid">
        <!-- OPÇÃO 1: CONEXÃO + PRATICIDADE (JÁ ATIVA NO HERO) -->
        <article class="usp-card card reveal" style="border: 2px solid var(--gold);">
          <div class="usp-icon">???</div>
          <h3>FOCO: CONEXÃO + PRATICIDADE</h3>
          <p><strong>Headline:</strong> Fortaleça sua fé no dia a dia com produtos certos e atendimento imediato</p>
          <p><strong>Sub:</strong> Incensos, perfumes e artigos religiosos escolhidos para trazer mais proteção, conexão e presença - com atendimento rápido no WhatsApp.</p>
          <div class="badge" style="background: var(--gold); color: var(--dark); padding: 4px 12px; border-radius: 12px; font-size: 0.8rem; margin-top: 10px; display: inline-block;">ATIVO NO HERO</div>
        </article>

        <!-- OPÇÃO 2: DOR + DÚVIDA -->
        <article class="usp-card card reveal">
          <div class="usp-icon">?</div>
          <h3>FOCO: DOR (falta de direção / dúvida)</h3>
          <p><strong>Headline:</strong> Não sabe qual produto usar na sua espiritualidade? A gente te guia</p>
          <p><strong>Sub:</strong> Receba orientação e escolha incensos, perfumes e artigos ideais para o seu momento espiritual - direto no WhatsApp.</p>
          <div class="badge" style="background: var(--accent); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.8rem; margin-top: 10px; display: inline-block;">IDEAL PARA TRÁFEGO FRIO</div>
        </article>

        <!-- OPÇÃO 3: DESEJO + PRESENÇA -->
        <article class="usp-card card reveal">
          <div class="usp-icon">?</div>
          <h3>FOCO: DESEJO (presença + respeito)</h3>
          <p><strong>Headline:</strong> Sua fé merece respeito, presença e os produtos certos</p>
          <p><strong>Sub:</strong> Peças e fragrâncias que fortalecem sua energia e destacam sua presença em qualquer ocasião espiritual.</p>
          <div class="badge" style="background: var(--muted); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.8rem; margin-top: 10px; display: inline-block;">IDEAL PARA QUEM JÁ CONHECE</div>
        </article>

        <!-- OPÇÃO 4: TRANSFORMAÇÃO -->
        <article class="usp-card card reveal">
          <div class="usp-icon">?</div>
          <h3>FOCO: TRANSFORMAÇÃO (emocional forte)</h3>
          <p><strong>Headline:</strong> Transforme seu ambiente, sua energia e sua conexão espiritual</p>
          <p><strong>Sub:</strong> Incensos, perfumes e artigos que ajudam a limpar, proteger e fortalecer sua fé - com atendimento rápido e personalizado.</p>
          <div class="badge" style="background: var(--accent); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.8rem; margin-top: 10px; display: inline-block;">FORTE PARA ANÚNCIOS</div>
        </article>

        <!-- OPÇÃO 5: URGÊNCIA + SOLUÇÃO -->
        <article class="usp-card card reveal">
          <div class="usp-icon">?</div>
          <h3>FOCO: URGÊNCIA + SOLUÇÃO</h3>
          <p><strong>Headline:</strong> Tudo que você precisa para sua fé, em um só lugar e com atendimento imediato</p>
          <p><strong>Sub:</strong> Escolha seus incensos, perfumes e artigos religiosos com praticidade e fale direto no WhatsApp para finalizar rápido.</p>
          <div class="badge" style="background: var(--wa); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.8rem; margin-top: 10px; display: inline-block;">IDEAL PARA VENDER RÁPIDO</div>
        </article>
      </div>

      <!-- COPY EXTRA FORTE PARA ANÚNCIOS -->
      <div class="cta-box reveal" style="margin-top: 40px; border: 2px dashed var(--gold);">
        <div class="cta-copy">
          <div class="section-label">? COPY EXTRA FORTE (ANÚNCIOS)</div>
          <h2>Pare de comprar no escuro - escolha os produtos certos para sua espiritualidade</h2>
          <p>
            <strong>Te ajudamos a escolher incensos, perfumes e artigos ideais para proteção, energia e conexão espiritual.</strong>
          </p>
          
          <div class="cta-points" style="margin-top: 20px;">
            <div>? <strong>Se o tráfego for frio (anúncio):</strong> Use a 2, 4 ou EXTRA</div>
            <div>? <strong>Se já conhece a marca:</strong> Use a 1 ou 3</div>
            <div>? <strong>Se quer vender rápido:</strong> Use a 5</div>
          </div>

          <div class="cta-actions">
            <a href="#" class="btn btn-wa wa-link">Testar cópia agora no WhatsApp</a>
            <a href="#destaques" class="btn btn-outline">Ver produtos</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="destaques">
    <div class="container">
      <div class="section-head reveal">
        <div class="section-label">Destaques</div>
        <h2>Peças que chamam atenção e reforçam sua presença.</h2>
        <p class="lead">
          Aqui entram os produtos que mais valorizam o visual da marca. Use fotos reais, bem enquadradas e com boa iluminação.
        </p>
      </div>

      <div class="gallery-grid">
        <article class="gallery-card reveal">
          <div class="gallery-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Chapeu.jpeg" alt="Acessório premium Mandalla Prime" class="gallery-img">
            <span class="gallery-badge">Premium</span>
          </div>
          <div class="gallery-copy">
            <h3>Chapéus e acessórios</h3>
            <p>Peças marcantes para eventos e ocasiões especiais. <strong>Entrega: 7-15 dias</strong> | <strong>A partir de R$ 189</strong></p>
            <a href="#" class="btn btn-wa wa-link">Quero essa peça</a>
          </div>
        </article>

        <article class="gallery-card reveal">
          <div class="gallery-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/vestidos.jpeg" alt="Peça sob encomenda Mandalla Prime" class="gallery-img">
            <span class="gallery-badge">Sob Encomenda</span>
          </div>
          <div class="gallery-copy">
            <h3>Peças especiais</h3>
            <p>Modelos para ocasiões específicas, com mais orientação sobre estilo, detalhe e produção.</p>
            <a href="#" class="btn btn-wa wa-link">Quero essa peça</a>
          </div>
        </article>

        <article class="gallery-card reveal">
          <div class="gallery-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/capas.jpeg" alt="Artigo espiritual Mandalla Prime" class="gallery-img">
            <span class="gallery-badge">Tradição</span>
          </div>
          <div class="gallery-copy">
            <h3>Artigos espirituais</h3>
            <p>Beleza, simbolismo e presença em peças pensadas para representar sua fé com verdade.</p>
            <a href="#" class="btn btn-wa wa-link">Quero essa peça</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="split">
        <article class="feature reveal">
          <h3>Quem compra quer sentir confiança rápido</h3>
          <p>
            O visitante não quer ficar caçando informação. Ele precisa bater o olho e entender: o que você vende, por que sua marca é especial e como falar com você agora.
          </p>
        </article>

        <article class="feature reveal">
          <h3>Por isso o foco do site é conversão</h3>
          <p>
            Menos distração, mais clareza, mais fotos fortes, CTA repetido nos pontos certos e experiência muito melhor no celular.
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- SEÇÃO COMO FUNCIONA - PARA QUEBRAR OBJEÇÕES -->
  <section class="section" id="como-funciona" style="background: linear-gradient(135deg, rgba(255,255,255,.02), rgba(244,208,111,.05));">
    <div class="container">
      <div class="section-head reveal">
        <div class="section-label">Processo Simples</div>
        <h2>Como funciona - da escolha à entrega</h2>
        <p class="lead">Sem complicação: escolha, fale com a gente, e receba sua peça pronta para impressionar.</p>
      </div>

      <div class="usp-grid">
        <article class="usp-card card reveal">
          <div class="usp-icon">1</div>
          <h3>Escolha sua peça</h3>
          <p>Veja nossos modelos ou chame no WhatsApp para peças personalizadas according to seu estilo e ocasião.</p>
        </article>

        <article class="usp-card card reveal">
          <div class="usp-icon">2</div>
          <h3>Fale com especialista</h3>
          <p>Atendimento direto no WhatsApp para detalhar medidas, cores, prazos e tirar todas as dúvidas.</p>
        </article>

        <article class="usp-card card reveal">
          <div class="usp-icon">3</div>
          <h3>Ajustamos pra você</h3>
          <p>Produção sob medida com atenção aos detalhes. Prazo: 7-15 dias úteis depending da complexidade.</p>
        </article>

        <article class="usp-card card reveal">
          <div class="usp-icon">4</div>
          <h3>Receba pronta</h3>
          <p>Entrega segura para todo o Brasil com tracking. Retirada local também disponível.</p>
        </article>
      </div>

      <div class="cta-box reveal" style="margin-top: 30px;">
        <div class="cta-copy">
          <div class="section-label">Garantia de Qualidade</div>
          <h2>100% satisfação ou ajustamos sem custo</h2>
          <p>
            Se a peça não ficar exatamente como imaginou, fazemos os ajustes necessários. Sua confiança é nossa prioridade.
          </p>
          <div class="cta-actions">
            <a href="#" class="btn btn-wa wa-link">Começar meu pedido agora</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="depoimentos">
    <div class="container">
      <div class="section-head reveal">
        <div class="section-label">Confiança</div>
        <h2>Quando a experiência é boa, a cliente sente segurança para comprar.</h2>
      </div>

      <div class="testimonial-wrap">
        <article class="testimonial reveal">
          <div class="stars">?????</div>
          <p>Atendimento muito rápido e a peça chegou linda. O acabamento fez toda diferença no visual.</p>
          <span class="author">Cliente satisfeita</span>
        </article>

        <article class="testimonial reveal">
          <div class="stars">?????</div>
          <p>Gostei porque consegui tirar minhas dúvidas direto no WhatsApp e fui atendida com atenção.</p>
          <span class="author">Cliente satisfeita</span>
        </article>

        <article class="testimonial reveal">
          <div class="stars">?????</div>
          <p>As peças têm presença de verdade. Dá pra ver que existe cuidado no visual e nos detalhes.</p>
          <span class="author">Cliente satisfeita</span>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="cta-box reveal">
        <div class="cta-copy">
          <div class="section-label">Chamada final</div>
          <h2>Encontrou a peça certa? Fale agora com a Mandalla Prime.</h2>
          <p>
            Tire dúvidas, consulte disponibilidade e agilize seu pedido em poucos minutos pelo WhatsApp.
          </p>

          <div class="cta-points">
            <div>? Atendimento direto</div>
            <div>? Resposta mais rápida</div>
            <div>? Consulta de peças e encomendas</div>
          </div>

          <div class="cta-actions">
            <a href="#" class="btn btn-wa wa-link">Chamar no WhatsApp agora</a>
            <a href="#destaques" class="btn btn-outline">Ver peças novamente</a>
          </div>
        </div>

        <div class="cta-card">
          <ul>
            <li>Peças com identidade forte</li>
            <li>Visual mais premium</li>
            <li>Experiência melhor no celular</li>
            <li>Foco em conversão real</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container">
      <div class="section-head reveal">
        <div class="section-label">FAQ</div>
        <h2>Dúvidas que normalmente travam a compra</h2>
      </div>

      <div class="faq-list">
        <article class="faq-item reveal">
          <h3>Como faço para pedir?</h3>
          <p>É só clicar no botão de WhatsApp, enviar sua mensagem e consultar a peça ou encomenda desejada.</p>
        </article>

        <article class="faq-item reveal">
          <h3>Vocês fazem envio?</h3>
          <p>Sim. A página já foi pensada para vender tanto no atendimento local quanto para pedidos enviados.</p>
        </article>

        <article class="faq-item reveal">
          <h3>Posso pedir algo personalizado?</h3>
          <p>Sim. A proposta da página já reforça a possibilidade de encomendas e atendimento mais próximo.</p>
        </article>

        <article class="faq-item reveal">
          <h3>O site funciona bem no celular?</h3>
          <p>Sim. Essa versão foi feita com foco em mobile, com botões maiores, leitura melhor e CTA fixo.</p>
        </article>
      </div>
    </div>
  </section>
</main>

<footer class="footer">
  <div class="container">
    <div class="footer-box">
      <div>
        <strong>Mandalla Prime</strong>
        <small>Presença, tradição e identidade em cada detalhe.</small>
      </div>
      <small>? 2026 Mandalla Prime. | CodingLab Todos os direitos reservados.</small>
    </div>
  </div>
</footer>

<a href="#" class="floating-wa wa-link" aria-label="WhatsApp">?</a>

<div class="mobile-cta-bar">
  <a href="#" class="btn btn-wa wa-link">Falar no WhatsApp agora</a>
</div>

<div class="image-modal" id="imageModal">
  <button class="image-modal-close" id="closeModal" aria-label="Fechar">×</button>
  <img id="modalImage" src="" alt="Imagem ampliada">
</div>

<script>
const whatsappNumber = '<?php echo get_option('mandalla_whatsapp', '5586999199084'); ?>';
const whatsappMessage = encodeURIComponent('Olá! Vim pelo site e quero saber mais sobre as peças da Mandalla Prime.');
const waLink = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

document.querySelectorAll('.wa-link').forEach(el => {
  el.href = waLink;
  el.target = '_blank';
});

const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.12 });

reveals.forEach(item => observer.observe(item));

const galleryVisuals = document.querySelectorAll('.gallery-visual');
const imageModal = document.getElementById('imageModal');
const modalImage = document.getElementById('modalImage');
const closeModal = document.getElementById('closeModal');

galleryVisuals.forEach((visual) => {
  visual.addEventListener('click', () => {
    const img = visual.querySelector('.gallery-img');
    modalImage.src = img.src;
    modalImage.alt = img.alt;
    imageModal.classList.add('active');
    document.body.style.overflow = 'hidden';
  });
});

closeModal.addEventListener('click', () => {
  imageModal.classList.remove('active');
  document.body.style.overflow = '';
});

imageModal.addEventListener('click', (e) => {
  if (e.target === imageModal) {
    imageModal.classList.remove('active');
    document.body.style.overflow = '';
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    imageModal.classList.remove('active');
    document.body.style.overflow = '';
  }
});
</script>

<?php get_footer(); ?>
