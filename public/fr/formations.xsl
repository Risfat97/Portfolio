<?xml version="1.0"?>

<xsl:stylesheet  version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
    <html lang="fr" dir="ltr">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta name="description" content="Portfolio Tafsir Mbodj NDIOUR"/>
            <meta name="author" content="Tafsir Mbodj NDIOUR"/>
            <meta name="creator" content="Tafsir Mbodj NDIOUR"/>
            <title>Portfolio Tafsir Mbodj NDIOUR: formations</title>
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
                    <a href="/fr" class="aside-link" property="rdfs:seeAlso" resource="/fr">
                        <img class="icone" src="/assets/images/badge.svg" alt="Icone"/>
                        <h3>Résumé</h3>
                    </a>
                    <a href="/experiences" class="aside-link" property="rdfs:seeAlso" resource="/experiences">
                        <img class="icone" src="/assets/images/military_tech.svg" alt="Icone"/>
                        <h3>Expériences</h3>
                    </a>
                    <a href="/formations" class="aside-link active" property="rdfs:seeAlso" resource="/formations">
                        <img class="icone" src="/assets/images/school.svg" alt="Icone"/>
                        <h3>Formations</h3>
                    </a>
                    <a href="/competences" class="aside-link" property="rdfs:seeAlso" resource="/competences">
                        <img class="icone" src="/assets/images/auto_awesome.svg" alt="Icone"/>
                        <h3>Compétences</h3>
                    </a>
                    <a href="/assets/docs/cv_fr_tafsir.pdf" class="aside-link" property="foaf:Document" resource="/assets/docs/cv_fr_tafsir.pdf">
                        <img class="icone" src="/assets/images/file_download.svg" alt="Icone"/>
                        <h3>C.V</h3>
                    </a>
                </aside>
                <section>
                    <h2>
                        <xsl:attribute name="hidden">1</xsl:attribute>
                        Formations</h2>
                    <div class="language-container">
                        <img class="icone icone-langue" src="/assets/images/language.svg" alt="Icone"/>
                        <select name="langue" id="langue" property="schema:knowsLanguage">
                            <option value="fr">
                                <xsl:attribute name="selected">1</xsl:attribute>
                                Français</option>
                            <option value="en">Anglais</option>
                            <option value="ru">Russe</option>
                        </select>
                    </div>
                    <xsl:for-each select="formations/formation">
                        <article class="edu-container">
                            <img class="edu-logo" alt="Logo Ecole">
                                <xsl:attribute name="src">
                                    <xsl:value-of select="ecole/logo/@link"></xsl:value-of>
                                </xsl:attribute>
                            </img>
                            <div class="edu-body">
                                <h4 class="school-name" property="dbo:EducationalInstitution">
                                    <xsl:value-of select="ecole/nom"></xsl:value-of>
                                </h4>
                                <h4 class="edu-title text-gray">
                                    <xsl:value-of select="label"></xsl:value-of>
                                </h4>
                                <p class="edu-interval text-gray">
                                    <xsl:value-of select="periode"></xsl:value-of>
                                </p>
                            </div>
                        </article>
                    </xsl:for-each>
                </section>
            </main>
            <script src="/assets/js/app.js"></script>
        </body>
    </html>
    </xsl:template>

</xsl:stylesheet>