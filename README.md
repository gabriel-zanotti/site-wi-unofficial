# Wurth Industry VM (PHP)

Projeto institucional em PHP para apresentar a solucao de Vending Machine da Wurth Industry.

## Estrutura

- `public/`: ponto de entrada web e assets estaticos.
- `src/config/`: configuracoes globais.
- `src/layout/`: cabecalho e rodape compartilhados.
- `src/pages/`: paginas por menu.

## Como executar localmente

```bash
cd public
php -S localhost:8080 router.php
```

Abra `http://localhost:8080/`.

## Fontes Wuerth

As fontes estao referenciadas em `public/assets/css/style.css`:

- `public/assets/fonts/wuerth-book.woff2` ou `.woff`
- `public/assets/fonts/wuerth-bold.woff2` ou `.woff`

<<<<<<< HEAD
Se os arquivos nao estiverem presentes, o navegador usara fallback sem quebrar o layout.
=======
Se os arquivos nao estiverem presentes, o navegador usara fallback sem quebrar o layout.
>>>>>>> 995c0da37c062d5a801e1431808f42d27e15831b
