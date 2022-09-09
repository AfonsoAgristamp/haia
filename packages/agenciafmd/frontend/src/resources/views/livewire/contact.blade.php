<div id="contact">
  <div class="bg-primary pt-block-small pt-md-block pt-xl-block-large">
    <svg role="img" class="text-primary fill-light ic-stripe">
      <use xlink:href="/svg/sprite.svg#ic-stripe"></use>
    </svg>
  </div>
  <div class="bg-primary p-block-small p-md-block p-xl-block-large pt-xl-block">
    <form wire:submit.prevent="submit" novalidate>
      <div class="form-floating mb-1q">
        <input wire:model.lazy="name" type="text"
               id="name"
               placeholder="Nome"
               required
               aria-label="nome"
               class="@error('name') is-invalid @enderror form-control">
        @error('name')
        <span class="invalid-feedback">
          {{ $message }}
        </span>
        @enderror
        <label for="name" class="form-label">Nome</label>
      </div>
      <div class="form-floating mb-1q">
        <input wire:model.lazy="phone" type="tel"
               id="phone"
               placeholder="Telefone"
               required
               aria-label="telefone"
               class="@error('phone') is-invalid @enderror js-mask-phone form-control">
        @error('phone')
        <span class="invalid-feedback">
          {{ $message }}
        </span>
        @enderror
        <label for="phone" class="form-label">Telefone</label>
      </div>
      <div class="form-floating mb-1q">
        <input wire:model.lazy="email" type="email"
               id="email"
               placeholder="E-mail"
               required
               aria-label="email"
               class="@error('email') is-invalid @enderror form-control">
        @error('email')
        <span class="invalid-feedback">
          {{ $message }}
        </span>
        @enderror
        <label for="email" class="form-label">E-mail</label>
      </div>
      <div class="form-check mb-1q">
          <input wire:model.lazy="terms"
                 type="checkbox"
                 name="privacy-terms"
                 required
                 class="form-check-input @error('terms') is-invalid @enderror"
                 id="privacy-terms">
          <label class="form-check-label text-reset fs-small" for="privacy-terms">
              Li e estou de acordo com a
              <a href="/pdfs/politica-de-privacidade.pdf"
                 target="_blank"
                 rel="noopener"
                 class="text-light-hover">
                  <u>Políticas de Privacidade</u>
              </a>
          </label>

          @error('terms')
          <span class="d-block invalid-feedback">
            {{ $message }}
        </span>
          @enderror
      </div>
      <div class="row align-items-center gy-1">
        <div class="col-12 col-lg-8">
          <p class="fs-xsmall lh-1 lh-md-1q">
            Pode preencher tranquilo. Você não está assumindo
            compromisso nenhum preenchendo esse formulário.
          </p>
        </div>
        <div class="col-3 col-lg-4">
          <div class="d-grid">
            <button type="submit"
                    wire:loading.attr="disabled"
                    wire:target="submit"
                    aria-label="enviar formulário"
                    class="btn btn-light">
              <span wire:loading.remove
                    wire:target="submit">
                Enviar
              </span>
              <span wire:loading class="fs-xsmall"
                    wire:target="submit">
                Enviando...
              </span>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
