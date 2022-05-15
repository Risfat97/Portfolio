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
            <title>Портфолио Tafsir Mbodj NDIOUR: опыт</title>
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
                    <a href="/ru/experience" class="aside-link active" property="rdfs:seeAlso" resource="/ru/experience">
                        <img class="icone" src="/assets/images/military_tech.svg" alt="Icone"/>
                        <h3>опыт</h3>
                    </a>
                    <a href="/ru/education" class="aside-link" property="rdfs:seeAlso" resource="/ru/education">
                        <img class="icone" src="/assets/images/school.svg" alt="Icone"/>
                        <h3>тренинги</h3>
                    </a>
                    <a href="/ru/skills" class="aside-link" property="rdfs:seeAlso" resource="/ru/skills">
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
                        опыт</h2>
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
                    <xsl:for-each select="experiences/experience">
                        <article class="exp-container">
                            <img class="logo" alt="Logo">
                                <xsl:attribute name="src">
                                    <xsl:value-of select="logo/@link"></xsl:value-of>
                                </xsl:attribute>
                            </img>
                            <div class="body">
                                <h4 class="exp-title">
                                    <xsl:value-of select="title/poste1"></xsl:value-of>&#x000A0;
                                    <a class="text-underline text-dark" target="_blank" rel="nofollow noopener noreferrer">
                                        <xsl:attribute name="href">
                                            <xsl:value-of select="title/entreprise/@link"></xsl:value-of>
                                        </xsl:attribute>
                                        <xsl:value-of select="title/entreprise"></xsl:value-of>
                                    </a>&#x000A0;
                                    <xsl:if test="title/poste2">
                                        <xsl:value-of select="title/poste2"></xsl:value-of>
                                    </xsl:if>
                                </h4>
                                <h4 class="exp-interval text-gray">
                                    <xsl:value-of select="@debut"></xsl:value-of> - <xsl:value-of select="@fin"></xsl:value-of>
                                </h4>
                                <xsl:if test="tools">
                                    <p class="exp-tools-header text-gray">Фреймворки / Языки программирования</p>
                                    <ul>
                                    <xsl:for-each select="tools/tool">
                                        <li class="text-gray" property="schema:knowsAbout"><xsl:value-of select="@name"></xsl:value-of></li>
                                    </xsl:for-each>
                                    </ul>
                                </xsl:if>
                            </div>
                        </article>
                    </xsl:for-each>
                    <div class="exp-end">
                        <div class="end"></div>
                    </div>
                </section>
            </main>
            <script src="/assets/js/app.js"></script>
        </body>
    </html>
    </xsl:template>

</xsl:stylesheet>