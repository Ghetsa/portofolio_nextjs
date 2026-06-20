import Link from "next/link";
import { notFound } from "next/navigation";
import { ArrowLeft, Download, ExternalLink } from "lucide-react";
import { SiteHeader } from "@/components/site-header";
import { getProjectBySlug, projects } from "@/lib/site-data";
import { DotGrid } from "@/components/dot-grid";

type Props = {
  params: Promise<{ slug: string }>;
};

export function generateStaticParams() {
  return projects.map((project) => ({ slug: project.slug }));
}

export async function generateMetadata({ params }: Props) {
  const { slug } = await params;
  const project = getProjectBySlug(slug);
  if (!project) return {};

  return {
    title: `${project.title} | Ghetsa.dev`,
    description: project.description,
  };
}

export default async function ProjectDetailPage({ params }: Props) {
  const { slug } = await params;
  const project = getProjectBySlug(slug);
  if (!project) notFound();

  return (
    <div className="relative min-h-screen overflow-x-hidden bg-[#f7f7f3] text-[#1b1b1b]">
      <DotGrid />
      <SiteHeader active="projects" />

      <main className="relative z-10 mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <Link
          href="/#projects"
          className="mb-8 inline-flex items-center gap-2 rounded-full border-[3px] border-[#1b1b1b] bg-white px-5 py-3 font-bold shadow-[4px_4px_0_0_#1b1b1b]"
        >
          <ArrowLeft className="h-4 w-4" />
          Back to Home
        </Link>

        <section className="space-y-5">
          <h1 className="font-display text-5xl font-black uppercase italic leading-none sm:text-6xl">
            {project.title}
          </h1>
          <p className="max-w-3xl border-l-[4px] border-[#dfff00] pl-5 text-lg leading-8 text-[#313131]">
            {project.description}
          </p>
          <div className="flex flex-wrap gap-4">
            <Link
              href={project.live}
              target="_blank"
              className="inline-flex items-center gap-2 border-[3px] border-[#1b1b1b] bg-[#dfff00] px-6 py-4 font-black shadow-[4px_4px_0_0_#1b1b1b]"
            >
              <Download className="h-4 w-4" />
              View Demo
            </Link>
            <Link
              href={project.github}
              target="_blank"
              className="inline-flex items-center gap-2 border-[3px] border-[#1b1b1b] bg-white px-6 py-4 font-black shadow-[4px_4px_0_0_#1b1b1b]"
            >
              <ExternalLink className="h-4 w-4" />
              GitHub Repo
            </Link>
          </div>
        </section>

        <section className="mt-10 grid gap-4 lg:grid-cols-[1.35fr_0.9fr]">
          <div className="border-[3px] border-[#1b1b1b] bg-white p-4 shadow-[4px_4px_0_0_#1b1b1b]">
            <div className={`aspect-[4/3] border-[3px] border-[#1b1b1b] ${project.accent === "lime" ? "bg-[#dfff00]" : project.accent === "pink" ? "bg-[#fdb6e9]" : "bg-[#cfe5ff]"}`}>
              <img
                src={`/images/project-${project.slug}.svg`}
                alt={project.title}
                className="h-full w-full object-cover"
              />
            </div>
          </div>

          <div className="space-y-4">
            <article className="border-[3px] border-[#1b1b1b] bg-[#fdb6e9] p-6 shadow-[4px_4px_0_0_#1b1b1b]">
              <h2 className="font-display text-3xl font-black underline decoration-4 underline-offset-8">About the Project</h2>
              <p className="mt-4 text-base leading-8 text-[#1b1b1b]">{project.challenge}</p>
            </article>

            <article className="border-[3px] border-[#1b1b1b] bg-white p-6 shadow-[4px_4px_0_0_#1b1b1b]">
              <h2 className="font-display text-3xl font-black">Key Features & Details</h2>
              <ul className="mt-5 space-y-4">
                {project.features.map((feature) => (
                  <li key={feature} className="flex items-start gap-3">
                    <span className="mt-1 inline-flex h-8 w-8 items-center justify-center border-[3px] border-[#1b1b1b] bg-[#dfff00] font-black">
                      ✦
                    </span>
                    <span className="text-sm leading-7">{feature}</span>
                  </li>
                ))}
              </ul>
              <div className="mt-6 border-t-[3px] border-[#1b1b1b] pt-5">
                <p className="mb-3 text-sm font-black uppercase tracking-[0.24em] text-[#556500]">Role</p>
                <div className="flex flex-wrap gap-2">
                  {project.role.map((role) => (
                    <span key={role} className="border-[2px] border-[#1b1b1b] bg-[#eeeeee] px-4 py-2 text-sm font-bold">
                      {role}
                    </span>
                  ))}
                </div>
              </div>
              <div className="mt-6">
                <p className="mb-3 text-sm font-black uppercase tracking-[0.24em] text-[#556500]">Tech Stack</p>
                <div className="flex flex-wrap gap-2">
                  {project.tech.map((tech) => (
                    <span key={tech} className="border-[2px] border-[#1b1b1b] bg-[#dfff00] px-4 py-2 text-sm font-bold">
                      {tech}
                    </span>
                  ))}
                </div>
              </div>
            </article>
          </div>
        </section>
      </main>

      <footer className="mt-12 border-t-[3px] border-[#1b1b1b] bg-[#fdb6e9]">
        <div className="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-8 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
          <p className="font-display text-2xl font-black">GHETSA.DEV</p>
          <div className="flex gap-6 text-sm font-bold uppercase tracking-widest">
            <Link href="/#projects">GitHub</Link>
            <Link href="/#projects">LinkedIn</Link>
          </div>
        </div>
      </footer>
    </div>
  );
}
