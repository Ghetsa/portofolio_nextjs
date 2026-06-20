export type Project = {
  slug: string;
  title: string;
  category: string;
  summary: string;
  description: string;
  challenge: string;
  features: string[];
  tech: string[];
  role: string[];
  live: string;
  github: string;
  accent: "lime" | "pink" | "blue";
};

export type Certificate = {
  slug: string;
  title: string;
  issuer: string;
  issueDate: string;
  credentialId: string;
  description: string;
  skills: string[];
  image: string;
};

export const site = {
  name: "GHETSA.DEV",
  fullName: "Ghetsa Ramadhani Riska Arryanti",
  title: "Ghetsa Ramadhani | Fullstack Developer Portfolio",
  description:
    "A bold neubrutalist portfolio for Ghetsa Ramadhani Riska Arryanti — fullstack developer, software developer, and AI enthusiast.",
  location: "Malang, Indonesia",
  email: "ghetsa.arryanti@gmail.com",
  socials: [
    { label: "GitHub", href: "https://github.com/Ghetsa" },
    { label: "LinkedIn", href: "https://linkedin.com/in/ghetsa" },
    { label: "Dribbble", href: "https://dribbble.com" },
  ],
  about:
    "I’m a pragmatic software engineer who thrives in structured environments. My approach emphasizes maintainability, performance, and clear architecture — with just enough playfulness to keep products memorable.",
  hero:
    "Informatics Engineering student passionate about building modern web applications, mobile applications, and AI-powered solutions.",
  education: [
    {
      school: "Politeknik Negeri Malang",
      program: "D4 Teknik Informatika",
      period: "2022 — Present",
      note: "GPA 3.80",
    },
    {
      school: "SMKN 3 Tuban",
      program: "Rekayasa Perangkat Lunak",
      period: "2019 — 2022",
      note: "Software Engineering Track",
    },
  ],
  skills: [
    {
      title: "Frontend",
      icon: "desktop_windows",
      chips: ["Next.js", "React", "Vue.js", "Tailwind CSS", "HTML/CSS", "JavaScript"],
    },
    {
      title: "Backend",
      icon: "dns",
      chips: ["Laravel", "Node.js", "Express", "PHP", "Python"],
    },
    {
      title: "Mobile & Data",
      icon: "smartphone",
      chips: ["Flutter", "MySQL", "PostgreSQL", "Firebase", "REST APIs"],
    },
  ],
} as const;

export const projects: Project[] = [
  {
    slug: "safeband",
    title: "SafeBand",
    category: "IoT + Web Development",
    summary: "Elderly fall detection system.",
    description:
      "A real-time elderly fall detection monitoring system built with Next.js and connected IoT sensors for fast incident awareness.",
    challenge:
      "The project needed low-latency updates, a readable alert dashboard, and a clean experience for caregivers under stress.",
    features: [
      "Realtime fall alerts with minimal UI friction.",
      "Role-aware dashboard for monitoring and follow-up.",
      "Device-oriented status views for quick action.",
    ],
    tech: ["Next.js", "IoT", "Realtime", "Cloud"],
    role: ["Fullstack Developer", "UI Engineer"],
    live: "https://ghetsa.dev/safeband",
    github: "https://github.com/Ghetsa/safeband",
    accent: "lime",
  },
  {
    slug: "facial-expression-detection",
    title: "Facial Expression Detection",
    category: "AI / ML Project",
    summary: "ML-based recognition.",
    description:
      "A facial expression recognition concept that classifies emotions and presents results in a simple research-friendly interface.",
    challenge:
      "Balancing model feedback, confidence visualization, and a lightweight interface that remains understandable on mobile devices.",
    features: [
      "Emotion classification output cards.",
      "Clear camera-driven analysis workflow.",
      "Minimal, focus-first visual hierarchy.",
    ],
    tech: ["Python", "AI", "Computer Vision"],
    role: ["ML Integration", "Frontend"],
    live: "https://ghetsa.dev/facial-expression-detection",
    github: "https://github.com/Ghetsa/facial-expression-detection",
    accent: "pink",
  },
  {
    slug: "point-of-sale",
    title: "Point of Sale",
    category: "Retail System",
    summary: "Fullstack retail management.",
    description:
      "A point of sale application for retail transactions, inventory-friendly workflows, and operational reporting.",
    challenge:
      "The interface had to stay fast during checkout while preserving clear state across cashier, product, and payment interactions.",
    features: [
      "Checkout-focused flow for fast sales.",
      "Inventory and transaction tracking views.",
      "Simple layout for operator efficiency.",
    ],
    tech: ["Laravel", "MySQL", "Bootstrap"],
    role: ["Backend Developer", "Product UI"],
    live: "https://ghetsa.dev/point-of-sale",
    github: "https://github.com/Ghetsa/point-of-sale",
    accent: "blue",
  },
  {
    slug: "marketplace-website",
    title: "Marketplace Website",
    category: "Web Commerce",
    summary: "High-performance e-commerce.",
    description:
      "A modern marketplace platform designed with Next.js and Tailwind for a polished commerce experience.",
    challenge:
      "Creating a clean browsing experience with product discovery, conversion-focused sections, and responsive layouts.",
    features: [
      "Category-first product navigation.",
      "Conversion-ready product cards.",
      "Responsive storefront composition.",
    ],
    tech: ["Next.js", "Tailwind CSS", "Commerce"],
    role: ["Frontend Engineer", "Product Designer"],
    live: "https://ghetsa.dev/marketplace",
    github: "https://github.com/Ghetsa/marketplace-website",
    accent: "lime",
  },
  {
    slug: "housing-admin",
    title: "Housing Admin",
    category: "Flutter App",
    summary: "Mobile property management.",
    description:
      "A mobile-first housing administration application designed for residents and administrators to handle everyday housing tasks.",
    challenge:
      "The app needed a clear mobile hierarchy, quick navigation, and a structure suited for both residents and admin workflows.",
    features: [
      "Resident and admin task flows.",
      "Mobile-first navigation patterns.",
      "Fast access to housing information.",
    ],
    tech: ["Flutter", "Firebase", "Mobile"],
    role: ["Mobile Developer", "UI System"],
    live: "https://ghetsa.dev/housing",
    github: "https://github.com/Ghetsa/housing-admin",
    accent: "pink",
  },
  {
    slug: "ai-ignition-training-portal",
    title: "AI Ignition Training Portal",
    category: "Learning Dashboard",
    summary: "Centralized dashboard for AI training management.",
    description:
      "A centralized dashboard concept for managing AI training programs, progress, and learner status at scale.",
    challenge:
      "The portal needed a clean reporting structure with approachable cards, task focus, and certificate-centric navigation.",
    features: [
      "Training status overview and progress.",
      "Certification tracking and monitoring.",
      "Program-centered dashboard structure.",
    ],
    tech: ["Next.js", "Firebase", "Admin UI"],
    role: ["Dashboard Designer", "Frontend Engineer"],
    live: "https://ghetsa.dev/ai-ignition",
    github: "https://github.com/Ghetsa/ai-ignition-training-portal",
    accent: "blue",
  },
];

export const certificates: Certificate[] = [
  {
    slug: "official-credential-uiux-specialist",
    title: "Official Credential: UI/UX Specialist",
    issuer: "Frontend Masters",
    issueDate: "Oct 2024",
    credentialId: "NB-42X-99",
    description:
      "A comprehensive certification covering advanced neubrutalist design principles, high-contrast systems, and component architecture with strong visual hierarchy.",
    skills: ["React", "Tailwind CSS", "Neubrutalism", "UI Architecture", "Design Systems"],
    image: "/images/cert-uiux-specialist.svg",
  },
  {
    slug: "ai-ignition-training",
    title: "AI Ignition Training",
    issuer: "Internal Training Program",
    issueDate: "2025",
    credentialId: "AI-2025-01",
    description: "A hands-on AI training credential focused on practical solution building and product workflow integration.",
    skills: ["AI", "Product Thinking", "Workflow Design"],
    image: "/images/cert-ai-ignition.svg",
  },
  {
    slug: "junior-web-developer",
    title: "Junior Web Developer",
    issuer: "Certification Track",
    issueDate: "2024",
    credentialId: "JWD-2024-07",
    description: "Certification covering core web development practices, responsive layouts, and delivery fundamentals.",
    skills: ["HTML", "CSS", "JavaScript", "Responsive UI"],
    image: "/images/cert-web-dev.svg",
  },
  {
    slug: "troubleshooting-debugging",
    title: "Troubleshooting & Debugging",
    issuer: "Developer Skills Program",
    issueDate: "2024",
    credentialId: "TBD-2024-12",
    description: "A practical credential focused on diagnosis, debugging flows, and resilient delivery practices.",
    skills: ["Debugging", "Problem Solving", "Workflow"],
    image: "/images/cert-debugging.svg",
  },
  {
    slug: "belajar-dasar-ai",
    title: "Belajar Dasar AI",
    issuer: "Dicoding / AI Learning Path",
    issueDate: "2023",
    credentialId: "AI-BASIC-03",
    description: "An introductory AI credential covering core concepts, model thinking, and responsible usage basics.",
    skills: ["AI", "Foundations", "Responsible Use"],
    image: "/images/cert-ai-basic.svg",
  },
];

export function getProjectBySlug(slug: string) {
  return projects.find((project) => project.slug === slug);
}

export function getCertificateBySlug(slug: string) {
  return certificates.find((certificate) => certificate.slug === slug);
}
