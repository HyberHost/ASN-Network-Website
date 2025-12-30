
<?php
$config = json_decode(file_get_contents(__DIR__ . '/data.json'), true);
$host = $_SERVER['HTTP_HOST'] ?? '';
$is27498 = (stripos($host, 'as27498.net') !== false);
$pageTitle = $is27498 ? 'AS27498 Network Information | SacredServers' : 'AS51692 Network Information | HyberHost';
$mainTitle = $is27498 ? 'AS27498 Network Information' : 'AS51692 Network Information';
$subtitle = $is27498 ? "SacredServers (HyberHost's Canada Network)" : 'HyberHost';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($pageTitle); ?></title>
        <?php
        if ($is27498) {
            $desc = "Network information, datacentres, IXs, BGP communities, and peering details for SacredServers (AS27498), HyberHost's Canada network.";
            $ogTitle = "AS27498 Network Information | SacredServers";
            $ogUrl = "https://as27498.net/";
            $ogSite = "SacredServers";
            $ogImg = "https://clientarea.hyberhost.com/brand/logo.png";
            $orgName = "SacredServers (HyberHost Canada Network)";
            $orgUrl = "https://as27498.net/";
            $sameAs = '["https://www.peeringdb.com/asn/27498","https://bgp.tools/as/27498"]';
        } else {
            $desc = "Network information, datacentres, IXs, BGP communities, and peering details for HyberHost (AS51692).";
            $ogTitle = "AS51692 Network Information | HyberHost";
            $ogUrl = "https://as51692.net/";
            $ogSite = "HyberHost";
            $ogImg = "https://clientarea.hyberhost.com/brand/logo.png";
            $orgName = "HyberHost";
            $orgUrl = "https://as51692.net/";
            $sameAs = '["https://www.peeringdb.com/asn/51692","https://bgp.tools/as/51692"]';
        }
        ?>
        <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
        <meta name="robots" content="index, follow">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle); ?>">
        <meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
        <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl); ?>">
        <meta property="og:site_name" content="<?php echo htmlspecialchars($ogSite); ?>">
        <meta property="og:image" content="<?php echo htmlspecialchars($ogImg); ?>">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($ogTitle); ?>">
        <meta name="twitter:description" content="<?php echo htmlspecialchars($desc); ?>">
        <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImg); ?>">
        <!-- JSON-LD Schema.org Markup -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": <?php echo json_encode($orgName); ?>,
            "url": <?php echo json_encode($orgUrl); ?>,
            "logo": "https://clientarea.hyberhost.com/brand/logo.png",
            "sameAs": <?php echo $sameAs; ?>,
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "email": "noc@hyberhost.com",
                    "contactType": "NOC"
                },
                {
                    "@type": "ContactPoint",
                    "email": "peering@hyberhost.com",
                    "contactType": "Peering"
                },
                {
                    "@type": "ContactPoint",
                    "email": "abuse@hyberhost.com",
                    "contactType": "Abuse"
                }
            ]
        }
        </script>
        <!-- Breadcrumb Schema -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": <?php echo json_encode($ogUrl); ?>
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Network Information",
                    "item": <?php echo json_encode($ogUrl); ?>
                }
            ]
        }
        </script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="/fav/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/fav/favicon.svg" />
        <link rel="shortcut icon" href="/fav/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png" />
        <meta name="apple-mobile-web-app-title" content="<?php echo htmlspecialchars($ogSite); ?> | HyberHost" />
        <link rel="manifest" href="/fav/site.webmanifest" />
</head>
<body class="bg-gray-100">
    <header class="bg-gray-900 text-white py-8 text-center">
        <nav class="mb-4 flex justify-center" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-300 hover:text-white">Home</a>
                </li>
                <li>
                    <span class="text-gray-400">/</span>
                </li>
                <li class="inline-flex items-center">
                    <span class="text-white font-semibold">Network Information</span>
                </li>
            </ol>
        </nav>
        <h1 class="text-3xl font-bold"><?php echo htmlspecialchars($mainTitle); ?></h1>
        <p class="text-lg mt-2"><?php echo htmlspecialchars($subtitle); ?></p>
    </header>
    <main class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8 mt-8">
        <section id="our-network" class="mb-10">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-200 pb-2 mb-4">Our Network</h2>
            <?php if ($is27498): ?>
                <p>SacredServers (AS27498) is a Canada-exclusive network, now operated as part of <a href="https://hyberhost.com">HyberHost</a>. We are gradually consolidating operations, and expect both SacredServers and HyberHost to merge into a new company in late 2026.</p>
                <ul class="list-disc ml-6 mt-3 space-y-1">
                    <li><span class="font-semibold">ASN:</span> 27498</li>
                    <li><span class="font-semibold">Operated by:</span> SacredServers</li>
                    <li><span class="font-semibold">Other ASNs:</span><br> - AS51692 (Our Main ASN)</li>
                    <li><span class="font-semibold">Traffic:</span> 2-10Gbps, Balanced</li>
                </ul>
            <?php else: ?>
                <p>
                    HyberHost (AS51692) operates a primarily UK-based network, with additional presence in Canada for our North American services.
                </p>
                <ul class="list-disc ml-6 mt-3 space-y-1">
                    <li><span class="font-semibold">ASN:</span> 51692</li>
                    <li><span class="font-semibold">Other ASNs:</span><br> - AS27498 (Canada Network)</li>
                    <li><span class="font-semibold">Traffic:</span> 20-50Gbps, mostly outbound</li>
                </ul>
            <?php endif; ?>
        </section>
        <section id="datacentre-locations" class="mb-10">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-200 pb-2 mb-4">Datacentres & PoPs</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 mt-2">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 border-b">Name</th>
                            <th class="px-4 py-2 border-b">Provider</th>
                            <th class="px-4 py-2 border-b">Location</th>
                            <th class="px-4 py-2 border-b">Type</th>
                            <th class="px-4 py-2 border-b">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($config['datacentres'] as $dc): ?>
                        <tr class="even:bg-gray-50">
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($dc['name']); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars(isset($dc['provider']) ? $dc['provider'] : (isset($dc['Provider']) ? $dc['Provider'] : '')); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($dc['location']); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($dc['type']); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($dc['notes']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="ix-locations" class="mb-10">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-200 pb-2 mb-4">Internet Exchanges (IXs)</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 mt-2">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 border-b">Name</th>
                            <th class="px-4 py-2 border-b">Location</th>
                            <th class="px-4 py-2 border-b">Status</th>
                            <th class="px-4 py-2 border-b">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($config['ixs'] as $ix): ?>
                        <tr class="even:bg-gray-50">
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($ix['name']); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($ix['location']); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars(isset($ix['status']) ? $ix['status'] : ''); ?></td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars($ix['notes']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="bgp-communities" class="mb-10">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-200 pb-2 mb-4">BGP Communities</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 mt-2">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 border-b">Community</th>
                            <th class="px-4 py-2 border-b">Action</th>
                            <th class="px-4 py-2 border-b">Target</th>
                            <th class="px-4 py-2 border-b">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($config['bgp_communities'] as $bgp): ?>
                        <tr class="even:bg-gray-50">
                            <td class="px-4 py-2 border-b font-mono"><?php echo htmlspecialchars($bgp['community']); ?></td>
                            <td class="px-4 py-2 border-b">
                                <?php
                                    echo isset($bgp['action']) && isset($config['bgp_actions'][$bgp['action']])
                                        ? htmlspecialchars($config['bgp_actions'][$bgp['action']]['name'] . ' — ' . $config['bgp_actions'][$bgp['action']]['description'])
                                        : (isset($bgp['action']) ? htmlspecialchars($bgp['action']) : '');
                                ?>
                            </td>
                            <td class="px-4 py-2 border-b">
                                <?php
                                    echo isset($bgp['target']) && isset($config['bgp_target_ids'][$bgp['target']])
                                        ? htmlspecialchars($config['bgp_target_ids'][$bgp['target']]['name'] . ' — ' . $config['bgp_target_ids'][$bgp['target']]['description'])
                                        : (isset($bgp['target']) ? htmlspecialchars($bgp['target']) : '');
                                ?>
                            </td>
                            <td class="px-4 py-2 border-b"><?php echo htmlspecialchars(isset($bgp['description']) ? $bgp['description'] : ''); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="peering-transit" class="mb-10">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-200 pb-2 mb-4">Peering / Transit</h2>
            <p>
                Peering with <?php echo $is27498 ? 'SacredServers (AS27498)' : 'HyberHost (AS51692)'; ?>.
            </p>
            <ul class="list-disc ml-6 mt-3 space-y-1">
                <li><span class="font-semibold">PeeringDB:</span> <a href="https://www.peeringdb.com/asn/51692" class="text-blue-700 underline" target="_blank">https://www.peeringdb.com/asn/51692</a></li>
                <li><span class="font-semibold">bgp.tools:</span> <a href="https://bgp.tools/as/51692" class="text-blue-700 underline" target="_blank">https://bgp.tools/as/51692</a></li>
                <li><span class="font-semibold">Policy:</span> at present we are only accepting new peers via IX or directly within Continuity House</li>
            </ul>
        </section>
        <section id="contact" class="mb-4">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-200 pb-2 mb-4">Contact Us</h2>
            <p class="mb-2">For peering requests, network issues, or abuse reports, please use the appropriate contact below:</p>
            <ul class="list-disc ml-6 space-y-1">
                <li><span class="font-semibold">NOC / Network:</span> <a href="mailto:noc@hyberhost.com" class="text-blue-700 underline">noc@hyberhost.com</a></li>
                <li><span class="font-semibold">Peering:</span> <a href="mailto:peering@hyberhost.com" class="text-blue-700 underline">peering@hyberhost.com</a></li>
                <li><span class="font-semibold">Abuse Reports:</span> <a href="mailto:abuse@hyberhost.com" class="text-blue-700 underline">abuse@hyberhost.com</a></li>
            </ul>
        </section>
    </main>
    <!-- Google Analytics -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-F7YHDNV8YK"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        window.addEventListener('DOMContentLoaded', function() {
            gtag('js', new Date());
            gtag('config', 'G-F7YHDNV8YK', { 'anonymize_ip': true });
        });
    </script>
</body>
</html>
