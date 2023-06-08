<template>
  <div class="portfolio">
    <div class="header">
      <h1 class="title">Meu Portfólio</h1>
    </div>
    <div class="content">
      <div class="profile">
        <img src="https://avatars.githubusercontent.com/u/102547689?v=4" alt="Foto de perfil" class="profile-pic" />
        <div class="profile-details">
          <h2 class="name">Pedro Ryago</h2>
          <p class="age">20 anos</p>
          <p class="degree">Engenharia de Software - 6º semestre</p>
        </div>
      </div>
      <div class="skills">
        <h3 class="skills-title">Habilidades</h3>
        <ul class="skills-list">
          <li class="skill">Python</li>
          <li class="skill">PHP</li>
          <li class="skill">Docker</li>
          <li class="skill">Kubernetes</li>
          <li class="skill">Redes</li>
          <li class="skill">SQL</li>
        </ul>
      </div>
      <div class="social-links">
        <a href="https://github.com/seu-usuario-github" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub" class="social-icon github-icon" />
        </a>
        <a href="https://www.linkedin.com/in/seu-usuario-linkedin" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="social-icon" />
        </a>
      </div>
    </div>
  </div>
</template>

<style>
.portfolio {
  background-color: #0f111a;
  color: #fff;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.header {
  margin-bottom: 40px;
}

.title {
  font-size: 32px;
  font-weight: bold;
  color: #fff;
}

.content {
  background-color: #1e202e;
  padding: 40px;
  border-radius: 8px;
}

.profile {
  display: flex;
  align-items: center;
  margin-bottom: 40px;
}

.profile-pic {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  margin-right: 40px;
}

.profile-details {
  text-align: left;
}

.name {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #fff;
}

.age,
.degree {
  font-size: 16px;
  color: #ccc;
  margin-bottom: 10px;
}

.skills-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #fff;
}

.skills-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.skill {
  background-color: #373737;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  padding: 8px 16px;
  margin: 8px;
  border-radius: 20px;
}

.social-links {
  margin-top: 40px;
}

.social-icon {
  width: 40px;
  height: 40px;
  margin: 0 10px;
  transition: transform 0.3s ease-in-out;
}

.social-icon.github-icon {
  filter: invert(100%) sepia(0%) saturate(7500%) hue-rotate(206deg) brightness(115%) contrast(100%);
}

.social-icon:hover {
  transform: scale(1.2);
}
</style>
