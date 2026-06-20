import { ArrowUpRight, Mail, MapPin } from "lucide-react";
import { CertificateCard } from "@/components/certificate-card";
import { DotGrid } from "@/components/dot-grid";
import { ProjectCard } from "@/components/project-card";
import { SectionHeading } from "@/components/section-heading";
import { SiteHeader } from "@/components/site-header";
import { certificates, projects, site } from "@/lib/site-data";
import Link from "next/link";

export default function HomePage() {
  return (
    <div className="relative min-h-screen overflow-x-hidden bg-[#f7f7f3] text-[#1b1b1b]">
      <DotGrid />
      <SiteHeader />

      <main className="relative z-10 mx-auto flex max-w-7xl flex-col gap-16 px-4 py-8 sm:px-6 lg:px-8">
        <section id="hero" className="grid gap-10 pt-8 lg:grid-cols-[1.15fr_0.85fr] lg:items-start lg:gap-12">
          <div className="space-y-6">
            <p className="inline-block border-[3px] border-[#1b1b1b] bg-[#fdb6e9] px-4 py-1 font-bold uppercase tracking-[0.24em] shadow-[4px_4px_0_0_#1b1b1b]">
              {site.name}
            </p>
            <h1 className="max-w-3xl font-display text-5xl font-black uppercase leading-[0.95] tracking-tight sm:text-6xl lg:text-7xl">
              Hi, I&apos;m{" "}
              <span className="inline-block -rotate-1 border-[3px] border-[#1b1b1b] bg-[#dfff00] px-3 shadow-[4px_4px_0_0_#1b1b1b]">
                {site.fullName}
              </span>
            </h1>
            <p className="max-w-2xl border-[3px] border-[#1b1b1b] bg-white p-5 text-base leading-7 shadow-[4px_4px_0_0_#1b1b1b]">
              {site.hero}
            </p>
            <div className="flex flex-wrap gap-4">
              <Link
                href="#projects"
                className="border-[3px] border-[#1b1b1b] bg-[#dfff00] px-6 py-4 font-bold shadow-[4px_4px_0_0_#1b1b1b] transition-transform hover:-translate-y-1"
              >
                View My Work
              </Link>
              <Link
                href="#education"
                className="border-[3px] border-[#1b1b1b] bg-[#fdb6e9] px-6 py-4 font-bold shadow-[4px_4px_0_0_#1b1b1b] transition-transform hover:-translate-y-1"
              >
                Download Resume
              </Link>
            </div>
          </div>

          <div className="relative">
            <div className="absolute -left-4 top-0 text-4xl text-[#556500]">✦</div>
            <div className="absolute right-0 top-10 text-4xl text-[#556500]">✦</div>
            <div className="ml-auto w-[min(100%,420px)] rotate-2 border-[3px] border-[#1b1b1b] bg-[#9dc4c8] p-3 shadow-[8px_8px_0_0_#1b1b1b]">
              <img src="/images/profile-card.svg" alt={site.fullName} className="aspect-square w-full object-cover" />
            </div>
          </div>
        </section>

        <section id="about" className="space-y-6">
          <SectionHeading title="About Me" tone="blue" />
          <div className="grid gap-5 lg:grid-cols-[0.36fr_1fr]">
            <div className="border-[3px] border-[#1b1b1b] bg-[#fdb6e9] p-6 shadow-[4px_4px_0_0_#1b1b1b]">
              <div className="space-y-4 text-sm">
                <div className="flex items-start gap-3">
                  <MapPin className="mt-0.5 h-4 w-4" />
                  <div>
                    <p className="font-bold">Location</p>
                    <p>{site.location}</p>
                  </div>
                </div>
                <div className="flex items-start gap-3">
                  <Mail className="mt-0.5 h-4 w-4" />
                  <div>
                    <p className="font-bold">Email</p>
                    <p>{site.email}</p>
                  </div>
                </div>
                <div>
                  <p className="font-bold">Languages</p>
                  <p>Indonesian (Native)</p>
                  <p>English (Proficient)</p>
                </div>
              </div>
            </div>
            <div className="border-[3px] border-[#1b1b1b] bg-white p-6 shadow-[4px_4px_0_0_#1b1b1b]">
              <p className="max-w-4xl text-base leading-8">{site.about}</p>
            </div>
          </div>
        </section>

        <section id="education" className="space-y-6">
          <SectionHeading title="Education" tone="lime" />
          <div className="space-y-4">
            {site.education.map((item) => (
              <article key={item.school} className="flex flex-col gap-4 border-[3px] border-[#1b1b1b] bg-white p-5 shadow-[4px_4px_0_0_#1b1b1b] md:flex-row md:items-center md:justify-between">
                <div>
                  <h3 className="font-display text-2xl font-bold">{item.school}</h3>
                  <p className="text-sm text-[#555]">{item.program}</p>
                  <p className="mt-1 text-sm">{item.period}</p>
                </div>
                <span className="w-fit rounded-full border-[3px] border-[#1b1b1b] bg-[#fdb6e9] px-4 py-2 text-sm font-bold shadow-[4px_4px_0_0_#1b1b1b]">
                  {item.note}
                </span>
              </article>
            ))}
          </div>
        </section>

        <section id="skills" className="space-y-6">
          <SectionHeading title="Technical Arsenal" tone="pink" />
          <div className="grid gap-4 md:grid-cols-3">
            {site.skills.map((group) => (
              <article key={group.title} className="border-[3px] border-[#1b1b1b] bg-white p-5 shadow-[4px_4px_0_0_#1b1b1b]">
                <h3 className="font-display text-2xl font-bold">{group.title}</h3>
                <div className="mt-4 flex flex-wrap gap-2">
                  {group.chips.map((chip) => (
                    <span key={chip} className="border-[2px] border-[#1b1b1b] bg-[#dfff00] px-3 py-1 text-xs font-bold">
                      {chip}
                    </span>
                  ))}
                </div>
              </article>
            ))}
          </div>
        </section>

        <section id="experience" className="space-y-6">
          <SectionHeading title="Experience" tone="blue" />
          <article className="border-[3px] border-[#1b1b1b] bg-[#fdb6e9] p-6 shadow-[4px_4px_0_0_#1b1b1b]">
            <div className="grid gap-6 md:grid-cols-[0.48fr_1fr]">
              <div className="border-[3px] border-[#1b1b1b] bg-[#dfff00] p-5">
                <p className="text-xs font-bold uppercase tracking-[0.24em]">Current Focus</p>
                <p className="mt-3 text-sm leading-7">
                  Building modern web products with strong structure, fast interactions, and polished visual systems.
                </p>
              </div>
              <div className="border-[3px] border-[#1b1b1b] bg-white p-5">
                <p className="text-sm leading-7">
                  {site.hero} My work spans fullstack development, mobile apps, and practical AI-enabled solutions.
                </p>
              </div>
            </div>
          </article>
        </section>

        <section id="projects" className="space-y-6">
          <SectionHeading title="Projects Showcase" tone="lime" />
          <div className="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            {projects.map((project) => (
              <ProjectCard key={project.slug} project={project} />
            ))}
          </div>
        </section>

        <section className="space-y-6">
          <SectionHeading title="Certifications" tone="pink" />
          <div className="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            {certificates.map((certificate) => (
              <CertificateCard key={certificate.slug} certificate={certificate} />
            ))}
          </div>
        </section>

        <section id="contact" className="grid gap-4 border-[3px] border-[#1b1b1b] bg-[#fdb6e9] p-6 shadow-[4px_4px_0_0_#1b1b1b] lg:grid-cols-[1fr_auto] lg:items-center">
          <div>
            <p className="font-display text-3xl font-black uppercase">Let&apos;s talk</p>
            <p className="mt-2 text-sm">
              Open to collaborations, internships, freelance builds, and product-minded engineering work.
            </p>
          </div>
          <Link
            href={`mailto:${site.email}`}
            className="inline-flex w-fit items-center gap-2 border-[3px] border-[#1b1b1b] bg-[#dfff00] px-6 py-4 font-bold shadow-[4px_4px_0_0_#1b1b1b]"
          >
            {site.email}
            <ArrowUpRight className="h-4 w-4" />
          </Link>
        </section>
      </main>

      <footer className="mt-12 border-t-[3px] border-[#1b1b1b] bg-[#fdb6e9]">
        <div className="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-8 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
          <p className="font-display text-2xl font-black">{site.name}</p>
          <div className="flex flex-wrap gap-6 text-sm font-bold uppercase tracking-widest">
            {site.socials.map((social) => (
              <a key={social.label} href={social.href} target="_blank" rel="noreferrer">
                {social.label}
              </a>
            ))}
          </div>
        </div>
      </footer>
    </div>
  );
}
