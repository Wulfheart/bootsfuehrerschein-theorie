<x-app-layout>
    <x-slot name="link">
        <a href="{{ route('dashboard') }}" class="flex flex-row items-center">
            <x-heroicon-o-chevron-left class="w-4 h-4 mr-1" />
            <span>Dashboard</span>
        </a>
    </x-slot>
    <div class="max-w-4xl px-4 mx-auto prose sm:px-6 lg:px-8">


        <h1>Datenschutzerklärung</h1>
        <p>Personenbezogene Daten (nachfolgend zumeist nur „Daten“ genannt) werden von uns nur im Rahmen der
            Erforderlichkeit sowie zum Zwecke der Bereitstellung eines funktionsfähigen und nutzerfreundlichen
            Internetauftritts, inklusive seiner Inhalte und der dort angebotenen Leistungen, verarbeitet.</p>
        <p>Gemäß Art. 4 Ziffer 1. der Verordnung (EU) 2016/679, also der Datenschutz-Grundverordnung (nachfolgend nur
            „DSGVO“ genannt), gilt als „Verarbeitung“ jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführter
            Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten, wie das Erheben, das
            Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das
            Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der
            Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.</p>
        <p>Mit der nachfolgenden Datenschutzerklärung informieren wir Sie insbesondere über Art, Umfang, Zweck, Dauer
            und Rechtsgrundlage der Verarbeitung personenbezogener Daten, soweit wir entweder allein oder gemeinsam mit
            anderen über die Zwecke und Mittel der Verarbeitung entscheiden. Zudem informieren wir Sie nachfolgend über
            die von uns zu Optimierungszwecken sowie zur Steigerung der Nutzungsqualität eingesetzten Fremdkomponenten,
            soweit hierdurch Dritte Daten in wiederum eigener Verantwortung verarbeiten.</p>
        <p>Unsere Datenschutzerklärung ist wie folgt gegliedert:</p>
        <p>I. Informationen über uns als Verantwortliche<br>II. Rechte der Nutzer und Betroffenen<br>III. Informationen
            zur Datenverarbeitung</p>
        <h3>I. Informationen über uns als Verantwortliche</h3>
        <p>Verantwortlicher Anbieter dieses Internetauftritts im datenschutzrechtlichen Sinne ist:</p>
        {!! env('LAW_NAME') !!}
        <p>{!! env('LAW_ADRESS') !!}</p>
        <p>E-Mail:
                {!! env('LAW_MAIL') !!}</span></p>
        <h3>II. Rechte der Nutzer und Betroffenen</h3>
        <p>Mit Blick auf die nachfolgend noch näher beschriebene Datenverarbeitung haben die Nutzer und Betroffenen das
            Recht</p>
        <ul>
            <li>auf Bestätigung, ob sie betreffende Daten verarbeitet werden, auf Auskunft über die verarbeiteten Daten,
                auf weitere Informationen über die Datenverarbeitung sowie auf Kopien der Daten (vgl. auch Art. 15
                DSGVO);</li>
            <li>auf Berichtigung oder Vervollständigung unrichtiger bzw. unvollständiger Daten (vgl. auch Art. 16
                DSGVO);</li>
            <li>auf unverzügliche Löschung der sie betreffenden Daten (vgl. auch Art. 17 DSGVO), oder, alternativ,
                soweit eine weitere Verarbeitung gemäß Art. 17 Abs. 3 DSGVO erforderlich ist, auf Einschränkung der
                Verarbeitung nach Maßgabe von Art. 18 DSGVO;</li>
            <li>auf Erhalt der sie betreffenden und von ihnen bereitgestellten Daten und auf Übermittlung dieser Daten
                an andere Anbieter/Verantwortliche (vgl. auch Art. 20 DSGVO);</li>
            <li>auf Beschwerde gegenüber der Aufsichtsbehörde, sofern sie der Ansicht sind, dass die sie betreffenden
                Daten durch den Anbieter unter Verstoß gegen datenschutzrechtliche Bestimmungen verarbeitet werden (vgl.
                auch Art. 77 DSGVO).</li>
        </ul>
        <p>Darüber hinaus ist der Anbieter dazu verpflichtet, alle Empfänger, denen gegenüber Daten durch den Anbieter
            offengelegt worden sind, über jedwede Berichtigung oder Löschung von Daten oder die Einschränkung der
            Verarbeitung, die aufgrund der Artikel 16, 17 Abs. 1, 18 DSGVO erfolgt, zu unterrichten. Diese Verpflichtung
            besteht jedoch nicht, soweit diese Mitteilung unmöglich oder mit einem unverhältnismäßigen Aufwand verbunden
            ist. Unbeschadet dessen hat der Nutzer ein Recht auf Auskunft über diese Empfänger.</p>
        <p><strong>Ebenfalls haben die Nutzer und Betroffenen nach Art. 21 DSGVO das Recht auf Widerspruch gegen die
                künftige Verarbeitung der sie betreffenden Daten, sofern die Daten durch den Anbieter nach Maßgabe von
                Art. 6 Abs. 1 lit. f) DSGVO verarbeitet werden. Insbesondere ist ein Widerspruch gegen die
                Datenverarbeitung zum Zwecke der Direktwerbung statthaft.</strong></p>
        <h3>III. Informationen zur Datenverarbeitung</h3>
        <p>Ihre bei Nutzung unseres Internetauftritts verarbeiteten Daten werden gelöscht oder gesperrt, sobald der
            Zweck der Speicherung entfällt, der Löschung der Daten keine gesetzlichen Aufbewahrungspflichten
            entgegenstehen und nachfolgend keine anderslautenden Angaben zu einzelnen Verarbeitungsverfahren gemacht
            werden.</p>

        <h4>Serverdaten</h4>
        <p>Aus technischen Gründen, insbesondere zur Gewährleistung eines sicheren und stabilen Internetauftritts,
            werden Daten durch Ihren Internet-Browser an uns bzw. an unseren Webspace-Provider übermittelt. Mit diesen
            sog. Server-Logfiles werden u.a. Typ und Version Ihres Internetbrowsers, das Betriebssystem, die Website,
            von der aus Sie auf unseren Internetauftritt gewechselt haben (Referrer URL), die Website(s) unseres
            Internetauftritts, die Sie besuchen, Datum und Uhrzeit des jeweiligen Zugriffs sowie die IP-Adresse des
            Internetanschlusses, von dem aus die Nutzung unseres Internetauftritts erfolgt, erhoben.</p>
        <p>Diese so erhobenen Daten werden vorrübergehend gespeichert, dies jedoch nicht gemeinsam mit anderen Daten von
            Ihnen.</p>
        <p>Diese Speicherung erfolgt auf der Rechtsgrundlage von Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes
            Interesse liegt in der Verbesserung, Stabilität, Funktionalität und Sicherheit unseres Internetauftritts.
        </p>
        <p>Die Daten werden spätestens nach sieben Tage wieder gelöscht, soweit keine weitere Aufbewahrung zu
            Beweiszwecken erforderlich ist. Andernfalls sind die Daten bis zur endgültigen Klärung eines Vorfalls ganz
            oder teilweise von der Löschung ausgenommen.</p>

        <h4>Cookies</h4>
        <h5>a) Sitzungs-Cookies/Session-Cookies</h5>
        <p>Wir verwenden mit unserem Internetauftritt sog. Cookies. Cookies sind kleine Textdateien oder andere
            Speichertechnologien, die durch den von Ihnen eingesetzten Internet-Browser auf Ihrem Endgerät ablegt und
            gespeichert werden. Durch diese Cookies werden im individuellen Umfang bestimmte Informationen von Ihnen,
            wie beispielsweise Ihre Browser- oder Standortdaten oder Ihre IP-Adresse, verarbeitet. &nbsp;</p>
        <p>Durch diese Verarbeitung wird unser Internetauftritt benutzerfreundlicher, effektiver und sicherer, da die
            Verarbeitung bspw. die Wiedergabe unseres Internetauftritts in unterschiedlichen Sprachen oder das Angebot
            einer Warenkorbfunktion ermöglicht.</p>
        <p>Rechtsgrundlage dieser Verarbeitung ist Art. 6 Abs. 1 lit b.) DSGVO, sofern diese Cookies Daten zur
            Vertragsanbahnung oder Vertragsabwicklung verarbeitet werden.</p>
        <p>Falls die Verarbeitung nicht der Vertragsanbahnung oder Vertragsabwicklung dient, liegt unser berechtigtes
            Interesse in der Verbesserung der Funktionalität unseres Internetauftritts. Rechtsgrundlage ist in dann Art.
            6 Abs. 1 lit. f) DSGVO.</p>
        <p>Mit Schließen Ihres Internet-Browsers werden diese Session-Cookies gelöscht.</p>
        <h5>b) Drittanbieter-Cookies</h5>
        <p>Gegebenenfalls werden mit unserem Internetauftritt auch Cookies von Partnerunternehmen, mit denen wir zum
            Zwecke der Werbung, der Analyse oder der Funktionalitäten unseres Internetauftritts zusammenarbeiten,
            verwendet.</p>
        <p>Die Einzelheiten hierzu, insbesondere zu den Zwecken und den Rechtsgrundlagen der Verarbeitung solcher
            Drittanbieter-Cookies, entnehmen Sie bitte den nachfolgenden Informationen.</p>
        <h5>c) Beseitigungsmöglichkeit</h5>
        <p>Sie können die Installation der Cookies durch eine Einstellung Ihres Internet-Browsers verhindern oder
            einschränken. Ebenfalls können Sie bereits gespeicherte Cookies jederzeit löschen. Die hierfür
            erforderlichen Schritte und Maßnahmen hängen jedoch von Ihrem konkret genutzten Internet-Browser ab. Bei
            Fragen benutzen Sie daher bitte die Hilfefunktion oder Dokumentation Ihres Internet-Browsers oder wenden
            sich an dessen Hersteller bzw. Support. Bei sog. Flash-Cookies kann die Verarbeitung allerdings nicht über
            die Einstellungen des Browsers unterbunden werden. Stattdessen müssen Sie insoweit die Einstellung Ihres
            Flash-Players ändern. Auch die hierfür erforderlichen Schritte und Maßnahmen hängen von Ihrem konkret
            genutzten Flash-Player ab. Bei Fragen benutzen Sie daher bitte ebenso die Hilfefunktion oder Dokumentation
            Ihres Flash-Players oder wenden sich an den Hersteller bzw. Benutzer-Support.</p>
        <p>Sollten Sie die Installation der Cookies verhindern oder einschränken, kann dies allerdings dazu führen, dass
            nicht sämtliche Funktionen unseres Internetauftritts vollumfänglich nutzbar sind. </p>

        <h4>Kontaktanfragen / Kontaktmöglichkeit</h4>
        <p>Sofern Sie per Kontaktformular oder E-Mail mit uns in Kontakt treten, werden die dabei von Ihnen angegebenen
            Daten zur Bearbeitung Ihrer Anfrage genutzt. Die Angabe der Daten ist zur Bearbeitung und Beantwortung Ihre
            Anfrage erforderlich - ohne deren Bereitstellung können wir Ihre Anfrage nicht oder allenfalls eingeschränkt
            beantworten.</p>
        <p>Rechtsgrundlage für diese Verarbeitung ist Art. 6 Abs. 1 lit. b) DSGVO.</p>
        <p>Ihre Daten werden gelöscht, sofern Ihre Anfrage abschließend beantwortet worden ist und der Löschung keine
            gesetzlichen Aufbewahrungspflichten entgegenstehen, wie bspw. bei einer sich etwaig anschließenden
            Vertragsabwicklung.</p>

        <h4>Google-Maps</h4>
        <p>In unserem Internetauftritt setzen wir Google Maps zur Darstellung unseres Standorts sowie zur Erstellung
            einer Anfahrtsbeschreibung ein. Es handelt sich hierbei um einen Dienst der Google Ireland Limited, Gordon
            House, Barrow Street, Dublin 4, Irland, nachfolgend nur „Google“ genannt.</p>
        <p>Durch die Zertifizierung nach dem EU-US-Datenschutzschild („EU-US Privacy Shield“)</p>
        <p><a target="_blank" rel="noopener"
                href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active</a>
        </p>
        <p>garantiert Google, dass die Datenschutzvorgaben der EU auch bei der Verarbeitung von Daten in den USA
            eingehalten werden.</p>
        <p>Um die Darstellung bestimmter Schriften in unserem Internetauftritt zu ermöglichen, wird bei Aufruf unseres
            Internetauftritts eine Verbindung zu dem Google-Server in den USA aufgebaut.</p>
        <p>Sofern Sie die in unseren Internetauftritt eingebundene Komponente Google Maps aufrufen, speichert Google
            über Ihren Internet-Browser ein Cookie auf Ihrem Endgerät. Um unseren Standort anzuzeigen und eine
            Anfahrtsbeschreibung zu erstellen, werden Ihre Nutzereinstellungen und -daten verarbeitet. Hierbei können
            wir nicht ausschließen, dass Google Server in den USA einsetzt.</p>
        <p>Rechtsgrundlage ist Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Optimierung der
            Funktionalität unseres Internetauftritts.</p>
        <p>Durch die so hergestellte Verbindung zu Google kann Google ermitteln, von welcher Website Ihre Anfrage
            gesendet worden ist und an welche IP-Adresse die Anfahrtsbeschreibung zu übermitteln ist.</p>
        <p>Sofern Sie mit dieser Verarbeitung nicht einverstanden sind, haben Sie die Möglichkeit, die Installation der
            Cookies durch die entsprechenden Einstellungen in Ihrem Internet-Browser zu verhindern. Einzelheiten hierzu
            finden Sie vorstehend unter dem Punkt „Cookies“.</p>
        <p>Zudem erfolgt die Nutzung von Google Maps sowie der über Google Maps erlangten Informationen nach den <a
                target="_blank" rel="noopener"
                href="http://www.google.de/accounts/TOS">Google-Nutzungsbedingungen</a>&nbsp;<a target="_blank"
                rel="noopener"
                href="https://policies.google.com/terms?gl=DE&amp;hl=de">https://policies.google.com/terms?gl=DE&amp;hl=de</a>
            und den <a target="_blank" rel="noopener"
                href="https://www.google.com/intl/de_de/help/terms_maps.html">Geschäftsbedingungen für Google Maps</a>
            https://www.google.com/intl/de_de/help/terms_maps.html.</p>
        <p>Überdies bietet Google unter</p>
        <p><a target="_blank" rel="noopener"
                href="https://adssettings.google.com/authenticated">https://adssettings.google.com/authenticated</a></p>
        <p><a target="_blank" rel="noopener"
                href="https://policies.google.com/privacy">https://policies.google.com/privacy</a></p>
        <p>weitergehende Informationen an.</p>

        <h4>Google reCAPTCHA</h4>
        <p>In unserem Internetauftritt setzen wir Google reCAPTCHA zur Überprüfung und Vermeidung von Interaktionen auf
            unserer Internetseite durch automatisierte Zugriffe, bspw. durch sog. Bots, ein. Es handelt sich hierbei um
            einen Dienst der Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland, nachfolgend nur
            „Google“ genannt.</p>
        <p>Durch die Zertifizierung nach dem EU-US-Datenschutzschild („EU-US Privacy Shield“)</p>
        <p><a target="_blank" rel="noopener"
                href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active</a>
        </p>
        <p>garantiert Google, dass die Datenschutzvorgaben der EU auch bei der Verarbeitung von Daten in den USA
            eingehalten werden.</p>
        <p>Durch diesen Dienst kann Google ermitteln, von welcher Webseite eine Anfrage gesendet wird sowie von welcher
            IP-Adresse aus Sie die sog. reCAPTCHA-Eingabebox verwenden. Neben Ihrer IP-Adresse werden womöglich noch
            weitere Informationen durch Google erfasst, die für das Angebot und die Gewährleistung dieses Dienstes
            notwendig sind.&nbsp;&nbsp;&nbsp;</p>
        <p>Rechtsgrundlage ist Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Sicherheit unseres
            Internetauftritts sowie in der Abwehr unerwünschter, automatisierter Zugriffe in Form von Spam o.ä..</p>
        <p>Google bietet unter</p>
        <p><a target="_blank" rel="noopener"
                href="https://policies.google.com/privacy">https://policies.google.com/privacy</a></p>
        <p>weitergehende Informationen zu dem allgemeinen Umgang mit Ihren Nutzerdaten an.</p>

        <h4>Google Fonts</h4>
        <p>In unserem Internetauftritt setzen wir Google Fonts zur Darstellung externer Schriftarten ein. Es handelt
            sich hierbei um einen Dienst der Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland,
            nachfolgend nur „Google“ genannt.</p>
        <p>Durch die Zertifizierung nach dem EU-US-Datenschutzschild („EU-US Privacy Shield“)</p>
        <p><a target="_blank" rel="noopener"
                href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active</a>
        </p>
        <p>garantiert Google, dass die Datenschutzvorgaben der EU auch bei der Verarbeitung von Daten in den USA
            eingehalten werden.</p>
        <p>Um die Darstellung bestimmter Schriften in unserem Internetauftritt zu ermöglichen, wird bei Aufruf unseres
            Internetauftritts eine Verbindung zu dem Google-Server in den USA aufgebaut.</p>
        <p>Rechtsgrundlage ist Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Optimierung und
            dem wirtschaftlichen Betrieb unseres Internetauftritts.</p>
        <p>Durch die bei Aufruf unseres Internetauftritts hergestellte Verbindung zu Google kann Google ermitteln, von
            welcher Website Ihre Anfrage gesendet worden ist und an welche IP-Adresse die Darstellung der Schrift zu
            übermitteln ist.</p>
        <p>Google bietet unter</p>
        <p><a target="_blank" rel="noopener"
                href="https://adssettings.google.com/authenticated">https://adssettings.google.com/authenticated</a></p>
        <p><a target="_blank" rel="noopener"
                href="https://policies.google.com/privacy">https://policies.google.com/privacy</a></p>
        <p>weitere Informationen an und zwar insbesondere zu den Möglichkeiten der Unterbindung der Datennutzung.</p>

        <h4>jsdelivr.net-CDN</h4>
        <p>Zur Optimierung der Abrufgeschwindigkeit, der Gestaltung und Darstellung der Inhalte unseres
            Internetauftritts auf unterschiedlichen Endgeräten setzen wir in unserem Internetauftritt den Dienst
            jsdeliver.com, ein Content Delivery Network („CDN“), ein. Hierbei handelt es sich um einen
            Open-Source-Dienst, der von der Prospectone Sp.z.o.o., ul. Krolweska 65A, 30-081, Krakow, Polen.</p>
        <p>Um die Inhalte unseres Internetauftritts schnell ausliefern zu können, greift der Dienst auf sog.
            JavaScript-Bibliotheken zurück. Dabei werden entsprechende Dateien von einem Drittserver geladen, der Ihre
            IP-Adresse erfasst. Wir haben dabei keinen Einfluss darauf, ob Ihre IP-Adresse durch Dritte zu statistischen
            Zwecken verarbeitet wird.</p>
        <p>Die Prospectone Sp.z.o.o. bietet unter</p>
        <p><a href="https://www.jsdelivr.com/privacy-policy-jsdelivr-net" target="_blank"
                rel="noopener">https://www.jsdelivr.com/privacy-policy-jsdelivr-net</a> &nbsp;</p>
        <p>weitergehende Datenschutzinformationen an.</p>
        <p>Rechtsgrundlage ist Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Beschleunigung der
            Ladezeiten unseres Internetauftritts sowie in dessen Optimierung.</p>
        <p>Um die Ausführung des Java-Script-Codes von jsdeliver.net insgesamt zu verhindern, können Sie einen sog.
            Java-Script-Blocker installieren, wie bspw. noscript.net oder ghostery.com. Sollten Sie die Ausführung des
            Java-Script-Codes verhindern oder einschränken, kann dies aus technischen Gründen allerdings dazu führen,
            dass womöglich nicht sämtliche Inhalte und Funktionen unseres Internetauftritts verfügbar sind.</p>

            <h3>Hosting</h3>
            <p>Gehostet wird auf Uberspace.de</p>
            <p>Jonas Pasche <br>
                Kaiserstr. 15 <br>
                55116 Mainz</p>

    </div>
</x-app-layout>
