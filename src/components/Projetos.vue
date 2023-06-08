<template>
  <section>
    <h2>Minhas Redes Sociais</h2>
    <div class="grid">
      <a v-for="socialMedia in socialMedias" :key="socialMedia.id" :href="socialMedia.url" class="social-media">
        <img :src="socialMedia.image" :alt="socialMedia.title" />
        <div class="overlay">
          <h3>{{ socialMedia.title }}</h3>
          <p>{{ socialMedia.description }}</p>
        </div>
      </a>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      socialMedias: [
        {
          id: 1,
          title: "GitHub",
          description: "Meu perfil no GitHub",
          image: "../assets/github.png",
          url: "https://github.com/seu-usuario-github",
        },
        {
          id: 2,
          title: "LinkedIn",
          description: "Meu perfil no LinkedIn",
          image: "../assets/linkedin.png",
          url: "https://www.linkedin.com/in/seu-usuario-linkedin",
        },
      ],
    };
  },
};
</script>

<style scoped>
section {
  padding: 40px;
}

h2 {
  text-align: center;
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

.social-media {
  position: relative;
  overflow: hidden;
  display: block;
  text-decoration: none;
}

.social-media img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease-in-out;
}

.social-media:hover img {
  transform: scale(1.1);
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.social-media:hover .overlay {
  opacity: 1;
}

h3,
p {
  color: #fff;
  text-align: center;
  margin: 0;
}

p {
  margin-top: 10px;
}
</style>
