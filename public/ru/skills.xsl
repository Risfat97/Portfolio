<?xml version="1.0"?>

<xsl:stylesheet  version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
    <html lang="ru" dir="ltr">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta name="description" content="Portfolio Tafsir Mbodj NDIOUR"/>
            <meta name="author" content="Tafsir Mbodj NDIOUR"/>
            <meta name="creator" content="Tafsir Mbodj NDIOUR"/>
            <title>Портфолио Tafsir Mbodj NDIOUR: навыки</title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Happy+Monkey"/>
            <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"/>
        </head>
        <body>
            <main about="#tafsir" typeof="foaf:Person">
                <aside>
                    <img class="img-profil" src="/assets/images/tafsir.png" alt="Tafsir NDIOUR" property="foaf:img"/>
                    <span property="foaf:depiction">
                        <xsl:attribute name="hidden">1</xsl:attribute>
                        Tafsir Mbodj NDIOUR</span>
                    <a href="/ru" class="aside-link" property="rdfs:seeAlso" resource="/ru">
                        <img class="icone" src="/assets/images/badge.svg" alt="Icone"/>
                        <h3>резюме</h3>
                    </a>
                    <a href="/ru/experience" class="aside-link" property="rdfs:seeAlso" resource="/ru/experience">
                        <img class="icone" src="/assets/images/military_tech.svg" alt="Icone"/>
                        <h3>опыт</h3>
                    </a>
                    <a href="/ru/education" class="aside-link" property="rdfs:seeAlso" resource="/ru/education">
                        <img class="icone" src="/assets/images/school.svg" alt="Icone"/>
                        <h3>тренинги</h3>
                    </a>
                    <a href="/ru/skills" class="aside-link active" property="rdfs:seeAlso" resource="/ru/skills">
                        <img class="icone" src="/assets/images/auto_awesome.svg" alt="Icone"/>
                        <h3>навыки</h3>
                    </a>
                    <a href="/assets/docs/cv_en_tafsir.pdf" class="aside-link" property="foaf:Document" resource="/assets/docs/cv_en_tafsir.pdf">
                        <img class="icone" src="/assets/images/file_download.svg" alt="Icone"/>
                        <h3>C.V</h3>
                    </a>
                </aside>
                <section>
                    <h2>
                        <xsl:attribute name="hidden">1</xsl:attribute>
                        навыки</h2>
                    <div class="language-container">
                        <img class="icone icone-langue" src="/assets/images/language.svg" alt="Icone"/>
                        <select name="langue" id="langue" property="schema:knowsLanguage">
                            <option value="fr">Французский</option>
                            <option value="en">Английский язык</option>
                            <option value="ru">
                                <xsl:attribute name="selected">1</xsl:attribute>
                                Русский</option>
                        </select>
                    </div>
                    <p class="bref-desc">
                        <span property="foaf:firstName">Tafsir</span> увлекается новыми технологиями и часто изучает новые языки 
                        программирования язык / фреймворк или инструмент.
                    </p>
                    <article class="section-skill">
                        <h2>Языки</h2>
                        <ul>
                            <xsl:for-each select="skills/languages/language">
                                <li class="skill-container">
                                    <h4 class="skill-name" property="dc:knowAbout">
                                        <xsl:value-of select="name"></xsl:value-of>
                                    </h4>
                                    <img class="skill-logo" alt="Skill's logo">
                                        <xsl:attribute name="src"><xsl:value-of select="logo/@link"></xsl:value-of></xsl:attribute>
                                    </img>
                                </li>
                            </xsl:for-each>
                        </ul>
                    </article>
                    <article class="section-skill">
                        <h2>Технологии</h2>
                        <ul>
                            <xsl:for-each select="skills/technologies/technologie">
                                <li class="skill-container">
                                    <h4 class="skill-name" property="dc:knowAbout">
                                        <xsl:value-of select="name"></xsl:value-of>
                                    </h4>
                                    <img class="skill-logo" alt="Skill's logo">
                                        <xsl:attribute name="src"><xsl:value-of select="logo/@link"></xsl:value-of></xsl:attribute>
                                    </img>
                                </li>
                            </xsl:for-each>
                        </ul>
                    </article>
                    <article class="section-skill">
                        <h2>инструменты</h2>
                        <ul>
                            <xsl:for-each select="skills/tools/tool">
                                <li class="skill-container">
                                    <h4 class="skill-name" property="dc:knowAbout">
                                        <xsl:value-of select="name"></xsl:value-of>
                                    </h4>
                                    <img class="skill-logo" alt="Skill's logo">
                                        <xsl:attribute name="src"><xsl:value-of select="logo/@link"></xsl:value-of></xsl:attribute>
                                    </img>
                                </li>
                            </xsl:for-each>
                        </ul>
                    </article>
                </section>
            </main>
            <script src="/assets/js/app.js"></script>
        </body>
    </html>
    </xsl:template>

</xsl:stylesheet>